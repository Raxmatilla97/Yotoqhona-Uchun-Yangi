<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreapplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:50',           
            'pass_info' => 'required|min:10|max:25',         
            'telefon' => 'required|min:1|max:10',
            'fakultet' => 'required|min:1|max:25',
            'yonalish' => 'required|min:1|max:25',
            'kurs_nomeri' => 'required|min:1|max:10',
            'guruhi' => 'required|min:1|max:100',
            'mezon' => 'required',
        ];
    }    
    public function messages()    {

        return [

            // Familya ism sharif uchun validatsiya messaglari
            'name.required' => "Familya ism sharifingizni yozishingiz kerak.",
            'name.min' => "Familya ism sharifingizni to'liq yozishingiz kerak.",
            'name.max' => "Familya ism sharifingiz shunchalik uzunmi? 😒", 

            // Passport ma'lumoti uchun validatsiya messaglari
            'pass_info.required' => "Pasportingizni Serya va Nomerini yozishingiz kerak.",
            'pass_info.min' => "Pasportingizni Serya va Nomerini to'liq yozishingiz kerak.",
            'pass_info.max' => "Pasportingiz Serya va Nomeri shunchalik uzunmi? 😒", 

            // Telefon ma'lumoti uchun validatsiya messaglari    
            'telefon.required' => "Shaxsiy telefon raqamingizni yozishingiz kerak.",
            'telefon.min' => "Shaxsiy telefon raqamingizni to'liq yozishingiz kerak.",
            'telefon.max' => "Shaxsiy telefon raqamingiz shunchalik uzunmi? 😒", 

            // Fakultet ma'lumoti uchun validatsiya messaglari    
            'fakultet.required' => "Ro'yxatda fakultetingizni tanlashingiz kerak.",
            'fakultet.min' => "Ro'yxatda fakultetingizni tanlashingiz kerak.",
            'fakultet.max' => "Ro'yxatda fakultetingiz nomi shunchalik uzunmi? 😒",

            // Yonalish ma'lumoti uchun validatsiya messaglari    
           'yonalish.required' => "Ro'yxatda yo'nalishingizni tanlashingiz kerak.",
           'yonalish.min' => "Ro'yxatda yo'nalishingizni tanlashingiz kerak.",
           'yonalish.max' => "Ro'yxatda yo'nalishingizni nomi shunchalik uzunmi? 😒",

            // Qaysi kursda o'qishi haqidagi ma'lumoti uchun validatsiya messaglari    
            'kurs_nomeri.required' => "Ro'yxatda qaysi kursda o'qishingizni tanlashingiz kerak.",
            'kurs_nomeri.min' => "Ro'yxatda qaysi kursda o'qishingizni tanlashingiz kerak.",
            'kurs_nomeri.max' => "Ro'yxatda kursiz nomi shunchalik uzunmi? 😒",

            // Qaysi guruhda o'qishi haqidagi ma'lumoti uchun validatsiya messaglari    
            'guruhi.required' => "Qaysi guruhda o'qishingizni yozishingiz kerak.",
            'guruhi.min' => "Qaysi guruhda o'qishingizni to'liq yozishingiz kerak.",
            'guruhi.max' => "Guruhiz nomi shunchalik uzunmi? 😒",

            // Mezon ma'lumoti uchun validatsiya messaglari    
            'mezon.required' => "Quyidagi mezonlardan birini tanlashingiz kerak.",         
        

        ];

    }
}
