<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreapplicationRequest;
use App\Http\Requests\UpdateapplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Resurs ro'yxatini ko'rsatish.
     */
    public function index()
    {
        $arizalar = Application::paginate(15);
        $arizalar = $this->filterArizalar($arizalar);  

        return view('dashboard.kelgan_arizalar.list')->with([
            'arizalar' => $arizalar,
        ]);
    }   

    /**
     * Yangi yaratilgan resursni saqlash.
     */
    public function store(StoreapplicationRequest $request)
    {
        
        $tmp_file = TemporaryFile::where('folder', $request->document)->first();

        do {
            $code = random_int(1000000, 9999999);
        } while (Application::where('number_generation', $code)->exists());

        $validatedData = $request->validated();

        $validatedData['pass_info'] = preg_replace('/[^a-zA-Z0-9]/', '', $request['pass_info']);
        $validatedData['telefon'] = preg_replace('/[^0-9]/', '', $request['telefon']);
        $validatedData['document'] = $tmp_file->folder . '/' . $tmp_file->filename . $tmp_file->file;        
        $validatedData['number_generation'] = $code;
        $validatedData['holat'] = 'korib_chiqilmoqda';
        $name = $validatedData['fish'];       
               
        Application::create($validatedData);         
        
        return redirect(route('confirm', ['code' => $code, 'name' => $name,]));

    }

    /**
     * Arizani mazmunini ko'rsatish
     */
    public function arizaniKorish($ariza)
    {
       
        $ariza = Application::where('id', $ariza )->first();   
       
        $ariza = $this->singleItem($ariza);
       
        return view('dashboard.kelgan_arizalar.show')->with([
            'ariza' => $ariza,
        ]);;
    }
  
    /**
     * Arizani o'chirish.
     */
    public function destroy(application $application)
    {
        //
    }

    public function maqullanganArizalar()
    {
        $arizalar = Application::where('holat', 'maqullandi')->paginate(15);
       
        $arizalar = $this->filterArizalar($arizalar);

        return view('dashboard.kelgan_arizalar.list')->with([
            'arizalar' => $arizalar,
        ]);
    }

    /**
     * Rad etilgan arizalar ro'yxati.
     */
    public function radEtilganArizalar()
    {
        $arizalar = Application::where('holat', 'rad_etildi')->paginate(15);

        $arizalar = $this->filterArizalar($arizalar);

        return view('dashboard.kelgan_arizalar.list')->with([
            'arizalar' => $arizalar,
        ]);
    }

    /**
     * Ko'rilmagan yoki tekshirish jarayonidagi arizalar.
     */
    public function korilmaganArizalar()
    {
        $arizalar = Application::where('holat', 'korib_chiqilmoqda')->paginate(15);

        $arizalar = $this->filterArizalar($arizalar);

        return view('dashboard.kelgan_arizalar.list')->with([
            'arizalar' => $arizalar,
        ]);
    }

    /**
     * Boshqaruv panelidagi asosiy sahifa.
     */
    public function dashboard()
    {
        $arizalar = Application::count();
        $arizalar_maqullangan = Application::where('holat', 'maqullandi')->count();
        $arizalar_rad_etildi = Application::where('holat', 'rad_etildi')->count();
        $arizalar_korilmagan = Application::where('holat', 'korib_chiqilmoqda' )->count();


        return view('dashboard')->with([
            'arizalar' => $arizalar,
            'arizalar_maqullangan' => $arizalar_maqullangan,
            'arizalar_rad_etildi' => $arizalar_rad_etildi,
            'arizalar_korilmagan' => $arizalar_korilmagan
        ]);
    }

    /**
     * Listda Fakultetlar va Yo'nalishlarni tushunarli so'zlarga o'girish qismi.
     */
    public function filterArizalar($arizalar)
    {
        foreach ($arizalar as $ariza) {
            // Asosiy ro'yxatni singleItem() funksiyasidan oladi!
            $ariza = $this->singleItem($ariza);           
        }
        
        return $arizalar;
    }

    /**
     * Showda Fakultetlar va Yo'nalishlarni tushunarli so'zlarga o'girish qismi.
     */
    public function singleItem($ariza)
    {
        // Fakultetlarni aniqlash
        if ($ariza->fakultet === 'gumanitar') {
            $ariza->fakultet = 'Gumanitar fanlar fakulteti';
        } elseif ($ariza->fakultet === 'pedagogika') {
            $ariza->fakultet = "Pedagogika fakulteti";
        }elseif ($ariza->fakultet === 'fizika') {
            $ariza->fakultet = "Fizika va kimyo fakulteti";
        }elseif ($ariza->fakultet === 'boshlangich') {
            $ariza->fakultet = "Boshlang'ich ta'lim fakulteti";
        }elseif ($ariza->fakultet === 'maktabgacha') {
            $ariza->fakultet = "Maktabgacha ta’lim fakulteti";
        }elseif ($ariza->fakultet === 'turizm') {
            $ariza->fakultet = "Turizm fakulteti";
        }elseif ($ariza->fakultet === 'tabiiy') {
            $ariza->fakultet = "Tabiiy fanlar fakulteti";
        }elseif ($ariza->fakultet === 'matematika') {
            $ariza->fakultet = "Matematika va informatika fakulteti";
        }elseif ($ariza->fakultet === 'sport') {
            $ariza->fakultet = "Sport va chaqiriqqacha harbiy ta’lim fakulteti";
        }elseif ($ariza->fakultet === 'sanatshunoslik') {
            $ariza->fakultet = "San'atshunoslik fakulteti";
        } else {
            $ariza->fakultet = "Fakulteti topilmadi!";
        }

        // Yo'nalishlarni aniqlash
        if ($ariza->yonalish === 'ozbek-tilshunosligi-yonalishi') {
            $ariza->yonalish = "O‘zbek tilshunosligi yo'nalishi";            
        }elseif($ariza->yonalish === 'ozbek-adabiyotshunosligi-yonalishi') {
            $ariza->yonalish = "O‘zbek adabiyotshunosligi yo'nalishi";
        }elseif($ariza->yonalish === 'fakultetlararo-rus-tili-yonalishi') {
            $ariza->yonalish = "Fakultetlararo rus tili yo'nalishi";
        }elseif($ariza->yonalish === 'rus-adabiyoti-va-talim-metodikasi-yonalishi') {
            $ariza->yonalish = "Rus adabiyoti va ta'lim metodikasi yo'nalishi";
        }elseif($ariza->yonalish === 'fakultetlar-aro-ijtimoiy-fanlar-yonalishi') {
            $ariza->yonalish = "Fakultetlar aro Ijtimoiy fanlar yo'nalishi";
        }elseif($ariza->yonalish === 'ozbekiston-tarixi-yonalishi') {
            $ariza->yonalish = "O'zbekiston tarixi yo'nalishi";
        }elseif($ariza->yonalish === 'jahon-tarixi-yonalishi') {
            $ariza->yonalish = "Jahon tarixi yo'nalishi";
        }elseif($ariza->yonalish === 'milliy-goya-manaviyat-asoslari-va-huquq-talimi-yonalishi') {
            $ariza->yonalish = "Milliy g'oya, ma'naviyat asoslari va huquq ta'limi yo'nalishi";
        }elseif($ariza->yonalish === 'rus-tili-va-talim-metodikasi-yonalishi') {
            $ariza->yonalish = "Rus tili va ta'lim metodikasi yo'nalishi";
        }elseif($ariza->yonalish === 'pedagogika-yonalishi') {
            $ariza->yonalish = "Pedagogika yo'nalishi";
        }elseif($ariza->yonalish === 'maktab-menejmenti-yonalishi') {
            $ariza->yonalish = "Maktab menejmenti yo'nalishi";
        }elseif($ariza->yonalish === 'psixologiya-yonalishi') {
            $ariza->yonalish = "Psixologiya yo'nalishi";
        }elseif($ariza->yonalish === 'umumiy-pedagogika-yonalishi') {
            $ariza->yonalish = "Umumiy pedagogika yo'nalishi";
        }elseif($ariza->yonalish === 'maxsus-pedagogika-yonalishi') {
            $ariza->yonalish = "Maxsus pedagogika yo'nalishi";
        }elseif($ariza->yonalish === 'fizika-yonalishi') {
            $ariza->yonalish = "Fizika yo'nalishi";
        }elseif($ariza->yonalish === 'kimyo-yonalishi') {
            $ariza->yonalish = "Kimyo yo'nalishi";
        }elseif($ariza->yonalish === 'fizika-va-astronomiya-oqitish-metodikasi-yonalishi') {
            $ariza->yonalish = "Fizika va astronomiya o'qitish metodikasi yo'nalishi";
        }elseif($ariza->yonalish === 'ilmiy-va-metodologik-kimyo-yonalishi') {
            $ariza->yonalish = "Ilmiy va metodologik kimyo yo'nalishi";
        }elseif($ariza->yonalish === 'boshlangich-talim-nazariyasi') {
            $ariza->yonalish = "Boshlang'ich ta'lim nazariyasi";
        }elseif($ariza->yonalish === 'boshlangich-talim-metodikasi-yonalishi') {
            $ariza->yonalish = "Boshlang'ich ta'lim metodikasi yo'nalishi";
        }elseif($ariza->yonalish === 'maktabgacha-talim-metodikasi-yonalishi') {
            $ariza->yonalish = "Maktabgacha ta'lim metodikasi yo'nalishi";
        }elseif($ariza->yonalish === 'bolalar-sporti-yonalishi') {
            $ariza->yonalish = "Bolalar sporti yo'nalishi";
        }elseif($ariza->yonalish === 'umumkasbiy-va-ihtisoslik-fanlari-yonalishi') {
            $ariza->yonalish = "Umumkasbiy va ihtisoslik fanlari yo'nalishi";
        }elseif($ariza->yonalish === 'ingliz-tili-yonalishi') {
            $ariza->yonalish = "Ingliz tili yo'nalishi";
        }elseif($ariza->yonalish === 'nemis-tili-yonalishi') {
            $ariza->yonalish = "Nemis tili yo'nalishi";
        }elseif($ariza->yonalish === 'fakultetlararo-chet-tillar-yonalishi') {
            $ariza->yonalish = "Fakultetlararo chet tillar yo'nalishi";
        }elseif($ariza->yonalish === 'biologiya-yonalishi') {
            $ariza->yonalish = "Biologiya yo'nalishi";
        }elseif($ariza->yonalish === 'geografiya-yonalishi') {
            $ariza->yonalish = "Geografiya yo'nalishi";
        }elseif($ariza->yonalish === 'genetika-va-evolutsion-biologiya-yonalishi') {
            $ariza->yonalish = "Genetika va evolutsion biologiya yo'nalishi";
        }elseif($ariza->yonalish === 'informatika-va-axborot-texnoligiyalari-yonalishi') {
            $ariza->yonalish = "Informatika va axborot texnoligiyalari yo'nalishi";
        }elseif($ariza->yonalish === 'algebra-va-matematik-analiz-yonalishi') {
            $ariza->yonalish = "Algebra va matematik analiz yo'nalishi";
        }elseif($ariza->yonalish === 'matematika-oqitish-metodikasi-va-geometriya-yonalishi') {
            $ariza->yonalish = "Matematika o'qitish metodikasi va geometriya yo'nalishi";
        }elseif($ariza->yonalish === 'informatika-oqitish-metodikasi-yonalishi') {
            $ariza->yonalish = "Informatika o'qitish metodikasi yo'nalishi";
        }elseif($ariza->yonalish === 'texnologik-talim-yonalishi') {
            $ariza->yonalish = "Texnologik talim yo'nalishi";
        }elseif($ariza->yonalish === 'jismoniy-madaniyat-metodikasi-yonalishi') {
            $ariza->yonalish = "Jismoniy madaniyat metodikasi yo'nalishi";
        }elseif($ariza->yonalish === 'jismoniy-madaniyat-nazariyasi') {
            $ariza->yonalish = "Jismoniy madaniyat nazariyasi";
        }elseif($ariza->yonalish === 'tasviriy-sanat-va-dizayn-yonalishi') {
            $ariza->yonalish = "Tasviriy sanat va dizayn yo'nalishi";
        }elseif($ariza->yonalish === 'muhandislik-va-kompyuter-grafikasi-yonalishi') {
            $ariza->yonalish = "Muhandislik va kompyuter grafikasi yo'nalishi";
        }elseif($ariza->yonalish === 'musiqa-yonalishi') {
            $ariza->yonalish = "Musiqa yo'nalishi";
        }else{
            $ariza->yonalish = "Yo'nalish topilmadi!";
        }

        return $ariza;
    }



    
}
