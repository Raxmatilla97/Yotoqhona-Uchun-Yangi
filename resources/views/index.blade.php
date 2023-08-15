<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>CHDPU - Yotoqhona uchun ariza berish</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body
    class="bg-gray-50 min-h-screen bg-[url('/public/assets/wave.svg')] bg-no-repeat bg-bottom bg-fixed"
  >
    <div class="flex justify-between p-6 items-center">
      <a href="#" class="flex items-center gap-2">
        <svg class="h-10 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
        </svg>
        <span class="text-xl font-black uppercase">Online Ariza</span>
      </a>
      <div class="">
        <a
          href="#"
          class="text-sm rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl 
            focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 
            focus:ring-offset-2 transition duration-150 ease-in-out"
          >Ariza holati</a
        >
      </div>
    </div>
    <div class="flex flex-col justify-center p-6 pb-12">
        <div class="max-w-md mx-auto">
            <!-- <svg class="h-12 text-green-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>               -->
            <img class="h-50 mx-auto" src="{{ asset('/assets/thumb__90_90_0_0_crop.png') }}" alt="">
            <h2 class="mt-2 sm:mt-6 text-2xl sm:text-3xl font-bold text-gray-900 text-center">CHDPU - Talabalar Turar Joyiga Online Ariza To'ldirish</h2>
        </div>
        <div class="mt-6 bg-white/80 p-6 sm:p-10 backdrop-blur-xl sm:mt-10 mx-auto rounded-xl shadow-xl w-full max-w-xl">
          <form action="#" method="post" autocomplete="off" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">F.I.SH</label>
                <div class="relative rounded-md shadow-sm mt-1">
                    <div class="absolute inset-y-0 flex  items-center left-0 pl-3">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>                              
                    </div>
                    <input type="text" id="name" name="name" required class="w-full pl-10 border-gray-300 rounded-md
                      focus:border-green-500 focus:ring-green-500 text-sm" placeholder="Talabaning F.I.SH"></input>
                </div>
            </div>
            <div>
                <label for="passport_info" class="block text-sm font-medium text-gray-700">Passport ma'lumotlaringiz</label>
                <div class="relative rounded-md shadow-sm mt-1">
                    <div class="absolute inset-y-0 flex  items-center left-0 pl-3">                      
                      <svg  class="h-5 w-5 text-gray-400"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z" clip-rule="evenodd" />
                      </svg>                       
                    </div>
                    <input type="text" id="passport_info" name="passport_info" class="w-full pl-10 border-gray-300 rounded-md
                      focus:border-green-500 focus:ring-green-500 text-sm" placeholder="Talabaning passport Seryasi va raqami"></input>
                </div>
            </div>
            <div>
              <label for="phone_number" class="block text-sm font-medium text-gray-700">Bog'lanish uchun telefon raqamiz (shaxsiy)</label>
              <div class="relative rounded-md shadow-sm mt-1">
                  <div class="absolute inset-y-0 flex  items-center left-0 pl-3">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path fill-rule="evenodd" d="M19.5 9.75a.75.75 0 01-.75.75h-4.5a.75.75 0 01-.75-.75v-4.5a.75.75 0 011.5 0v2.69l4.72-4.72a.75.75 0 111.06 1.06L16.06 9h2.69a.75.75 0 01.75.75z" clip-rule="evenodd" />
                      <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />uni
                    </svg>                    
                  </div>
                  <input type="number" id="phone_number" name="phone_number" class="w-full pl-10 border-gray-300 rounded-md
                    focus:border-green-500 focus:ring-green-500 text-sm" placeholder="+998(00-000-0000)"></input>
              </div>
          </div>

          <div>
            <label for="fakultetlar" class="block text-sm font-medium text-gray-700">Tahsil olayotgan fakultetingiz</label>
            <div class="relative rounded-md shadow-sm mt-1">
                <div class="absolute inset-y-0 flex  items-center left-0 pl-3">
                  <svg  class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                  </svg>     
                </div>
                  <select id="fakultetlar" name="fakultetlar" class="w-full pl-10 border-gray-300 rounded-md
                  focus:border-green-500 focus:ring-green-500 text-sm normal-case">
                    <option value="none" selected>Fakultet nomini tanlang</option>
                    <option value="gumanitar">Gumanitar fanlar fakulteti</option>
                    <option value="pedagogika">Pedagogika fakulteti</option>
                    <option value="fizika">Fizika va kimyo fakulteti</option>
                    <option value="boshlangich">Boshlang'ich ta'lim fakulteti</option>
                    <option value="maktabgacha">Maktabgacha ta’lim fakulteti</option>                    
                    <option value="turizm">Turizm fakulteti</option>
                    <option value="tabiiy">Tabiiy fanlar fakulteti</option>
                    <option value="matematika">Matematika va informatika fakulteti</option>
                    <option value="sport">Sport va chaqiriqqacha harbiy ta’lim fakulteti</option>
                    <option value="sanatshunoslik">San'atshunoslik fakulteti</option>
                  </select>
            </div>
        </div>

        <div>
          <label for="department" class="block text-sm font-medium text-gray-700">Tahsil olayotgan yo'nalishingiz</label>
          <div class="relative rounded-md shadow-sm mt-1">
              <div class="absolute inset-y-0 flex  items-center left-0 pl-3">                
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                </svg>
                
              </div>
                <select id="department" class="w-full pl-10 border-gray-300 rounded-md
                focus:border-green-500 focus:ring-green-500 text-sm normal-case">
                  <option selected>Yo'nalish nomini tanlang</option>                 
                </select>
          </div>
      </div>

      <div>
        <label for="kurs" class="block text-sm font-medium text-gray-700">Tahsil olayotgan bosqichingiz</label>
        <div class="relative rounded-md shadow-sm mt-1">
            <div class="absolute inset-y-0 flex  items-center left-0 pl-3">            
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
              </svg>                  
            </div>
              <select id="kurs" name="kurs" class="w-full pl-10 border-gray-300 rounded-md
              focus:border-green-500 focus:ring-green-500 text-sm normal-case">
                <option selected>Kursingizni tanlang</option>
                <option value="1-kurs">1-Kurs</option>
                <option value="2-kurs">2-Kurs</option>
                <option value="3-kurs">3-Kurs</option>
                <option value="4-kurs">4-Kurs</option>
                <option value="5-kurs">5-Kurs</option>                      
              </select>
          </div>
      </div>
      <div>
        <label for="guruh" class="block text-sm font-medium text-gray-700">Tahsil olayotgan guruhingiz</label>
        <div class="relative rounded-md shadow-sm mt-1">
            <div class="absolute inset-y-0 flex  items-center left-0 pl-3">              
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                                            
            </div>
            <input type="text" id="guruh" name="guruh" required class="w-full pl-10 border-gray-300 rounded-md
              focus:border-green-500 focus:ring-green-500 text-sm" placeholder="Tahsil olayotgan guruhingizni yozing"></input>
          </div>
      </div>

      <div>
        <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white text-center">Quyidagi qaysi me’zonlarga mos kelasiz?</h3>
        <div class="relative rounded-md shadow-sm mt-1">           
            <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
              <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="mehribonlik_uylari_tarbiyalanuvchilari" type="radio" value="mehribonlik_uylari_tarbiyalanuvchilari" name="tanlash_qismi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="mehribonlik_uylari_tarbiyalanuvchilari" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mehribonlik uylari tarbiyalanuvchilari (to‘liq davlat ta’minotida bo‘lgan bolalar)</label>
                  </div>
              </li>
              <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="chin_yetimlar" type="radio" value="chin_yetimlar" name="tanlash_qismi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="chin_yetimlar" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chin yetimlar (ota-onasi vafot etgan, vasiylik va homiylikka olingan yetimlar)</label>
                  </div>
              </li>
              <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="nogironligi_bor" type="radio" value="nogironligi_bor" name="tanlash_qismi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="nogironligi_bor" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I va II-guruh nogironligi bo‘lgan shaxslar</label>
                  </div>
              </li>
              <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="ijtimoiy_himoya" type="radio" value="ijtimoiy_himoya" name="tanlash_qismi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="ijtimoiy_himoya" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">“Ijtimoiy himoya yagona reestri” axborot tizimi (my.gov.uz) orqali kam ta’minlangan deb e’tirof etilgan oila farzandlari (Bunda, 2023-yilda axborot tizimiga kiritilgan oilalar hisobga olinadi).</label>
                  </div>
              </li>
              <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input id="uzoq_viloyatdagi_talabalar" type="radio" value="uzoq_viloyatdagi_talabalar" name="tanlash_qismi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="uzoq_viloyatdagi_talabalar" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Uzoq viloyatlardagi talabalar (Andijon, Farg'ona va Namangan viloyatlaridan tashqari)</label>
                </div>
            </li>
          </ul>
          
        </div>
      </div>

      <div>
        <div class="flex items-center justify-center max-w-full mb-7">
          <div class="relative text-center">
            <h2 class="shadow-sm relative rounded-md text-lg border border-gray-200 rounded-t-lg dark:border-gray-600 font-medium px-1 py-3 right-2 ">Yuqoridagi me'zonlarni asoslovchi hujjatingizni yuklang.
            </h2>
            
            
          </div>
          <svg class="w-12 mr-2 h-12 mt-2 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
          
          <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-54 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                  </svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span class="font-semibold">Bu yerga bosib</span> fayl yuklang</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400 text-center">PNG, JPG, PDF, WORD (MAX. 5MB)</p>
              </div>
              <input id="dropzone-file" type="file" class="hidden" />
          </label>
      </div>
      <div class="mb-7 ml-4">
        <div class="flex items-center">
          <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Barcha ma'lumotlaringiz to'grimi? <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Bir qayta ko'rish</a>.</label>
        </div>
      </div>                    
          <div>
            <a
            href="#"
            class="justify-center items-center flex rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl 
              focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 
              focus:ring-offset-2 transition duration-150 ease-in-out"
            >Jo'natish</a>
          </div>
     
          </form>
          <div class="flex relative justify-center items-center mt-6">
            <div class="absolute inset-y-0 left-1 flex items-center top-[-20px]">
              
              <svg class="h-7 w-7 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
              
            </div>
          <p class="font-medium text-sm pl-8 text-gray-600 hover:gray-500 text-center">Sahifa test holatida! Foydalanishda hatoliklar chiqsa bu haqda <a href="https://t.me/Raxmatilla_Fayziyev" class="font-bold text-cyan-400 hover:text-cyan-700">yozishingiz mumkin.</a></p>
        </div>
    </div>

    <script>
       var departments = {
              "none": ["Yo'nalish nomini tanlang"],
              "fizika": ['Fizika kafedrasi', 'Kimyo kafedrasi', "Fizika va astronomiya o'qitish metodikasi kafedrasi", "Ilmiy va metodologik kimyo kafedrasi"],
              "matematika": ['Informatika va axborot texnoligiyalari kafedrasi', 'Algebra va matematik analiz kafedrasi', "Matematika o'qitish metodikasi va geometriya kafedrasi", "Informatika o'qitish metodikasi kafedrasi"],
              "tabiiy": ['Biologiya kafedrasi', 'Geografiya kafedrasi', 'Genetika va evolutsion biologiya kafedrasi'],
              "gumanitar": ["O'zbek tilshunosligi kafedrasi", "O‘zbek adabiyotshunosligi kafedrasi", 'Fakultetlararo rus tili kafedrasi', "Rus adabiyoti va ta'lim metodikasi kafedrasi", "Fakultetlar aro Ijtimoiy fanlar kafedrasi", "O'zbekiston tarixi kafedrasi", "Jahon tarixi kafedrasi", "Milliy g’oya, ma’naviyat asoslari va huquq ta’limi kafedrasi", "Rus tili va ta'lim metodikasi kafedrasi"],
              "pedagogika": ['Pedagogika kafedrasi', 'Maktab menejmenti kafedrasi', 'Psixologiya kafedrasi', "Umumiy pedagogika kafedrasi", "Maxsus pedagogika kafedrasi"],
              "maktabgacha": ['Maktabgacha ta’lim metodikasi kafedrasi', 'Bolalar sporti kafedrasi'],
              "boshlangich": ["Boshlang'ich ta'lim nazariyasi", "Boshlangʻich taʻlim metodikasi kafedrasi"],
              "turizm": ['Umumkasbiy va ihtisoslik fanlari kafedrasi', 'Ingliz tili kafedrasi', 'Nemis tili kafedrasi', 'Fakultetlararo chet tillar kafedrasi'],
              "sport": ["Texnologik talim kafedrasi", "Jismoniy madaniyat metodikasi kafedrasi", "Jismoniy madaniyat nazariyasi"],
              "sanatshunoslik": ["Tasviriy san’at va dizayn kafedrasi", "Muhandislik va kompyuter grafikasi kafedrasi", "Musiqa kafedrasi"],
              
            };
            
            var faculty = document.getElementById('fakultetlar');
            var department = document.getElementById('department');
            
            faculty.addEventListener('change', function() {
              var selectedFaculty = faculty.value;
              var departmentOptions = '';
            
              for (var i = 0; i < departments[selectedFaculty].length; i++) {
                departmentOptions += '<option value="' + departments[selectedFaculty][i].split(' ')[0].toLowerCase().replace(/[\'‘]/g, '') + '">' + departments[selectedFaculty][i] + '</option>';
              }

              // departmentOptions += '<option value="' + departments[selectedFaculty][i].split(' ')[0].toLowerCase().replace(/[\'‘]/g, '') + '">' + departments[selectedFaculty][i] + '</option>';
            
              department.innerHTML = departmentOptions;
            });
    </script>

    <div class="font-bold">
      <hr class="my-6 border-gray-400 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://cspi.uz/" class="hover:underline">CSPU</a>. All Rights Reserved. Fayziyev.R | Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>
     
    </div>
      <!--  Error validatsiyasi uchun namuna -->
            <!-- <div>
              <label for="email" class="block text-sm font-medium text-red-700">Email</label>
              <div class="relative rounded-md shadow-sm mt-1">
                  <div class="absolute inset-y-0 flex  items-center left-0 pl-3">
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                                                  
                  </div>
                  <input type="email" id="email" name="email" class="w-full pl-10 border-red-300 rounded-md
                    focus:border-red-500 focus:ring-red-500 text-sm text-red-900 placeholder-red-300 pr-10" placeholder="Email manzilizni yozing"></input>
                    <div class="absolute inset-y-0 right-3 flex items-center pl-3">
                      <svg class="-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                      </svg>                        
                    </div>
              </div>
              <p class="mt-2 text-sm text-red-600">Siz yozgan email bazada mavjud!</p>
            </div> -->
            <!--  /Error validatsiyasi uchun namuna -->
  </body>
</html>
