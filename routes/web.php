<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\TestController;



Route::get('/', function () {
    return view('index');
})->name('site');

// Ro'yxatdan o'tganlik haqida habar va ID kod beradigan qism
Route::get('/confirm', function () {
    return view('confirm');
})->name('confirm');

// Talabalardan kelib tushgan arizlalarni listi
Route::post('/kelgan', [ApplicationController::class, 'store'])->name('kelgan_arizalar_store');

// Ariza holatini tekshirish
Route::post('/arizani-tekshirish', [ApplicationController::class, 'arizaniTekshirish'])->name('arizani-tekshirish');

// Ariza holatini tekshirish
Route::get('/arizani-javobi', function () {
    return view('javob');
})->name('arizani-javobi');

//  Yuklangan fayllarni saqalash routeri
Route::post('/tmp-upload', [TestController::class, 'tmpUpload']);


/*
|--------------------------------------------------------------------------
| Boshqaruv panelini routerlari
|--------------------------------------------------------------------------    
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // Boshqaruv paneli asosiy sahifasini routeri
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');    
    Route::get('/dashboard', [ApplicationController::class, 'dashboard'])->name('dashboard');
    
    /*
    |------------------------------------------------------------------------------
    | Talabalardan kelgan arizalarni ko'rish va tahrirlash sahifalarini routerlari
    |------------------------------------------------------------------------------
    */

    // Talabalardan kelib tushgan arizlalarni listi
    Route::get('/dashboard/kelgan-arizalar', [ApplicationController::class, 'index'])->name('kelgan-arizalar');

    // Rad etilgan arizalar listi
    Route::get('/dashboard/rad-etilgan-arizalar', [ApplicationController::class, 'radEtilganArizalar'])->name('rad-etilgan-arizalar');

    // Maqullangan arizalar listi
    Route::get('/dashboard/maqullangan-arizalar', [ApplicationController::class, 'maqullanganArizalar'])->name('maqullangan-arizalar');

     // Ko'rilmagan arizalar listi
     Route::get('/dashboard/korilmagan-arizalar', [ApplicationController::class, 'korilmaganArizalar'])->name('korilmagan-arizalar');

    // Arizani ko'rish
    Route::get('/dashboard/arizani-korish/{id}', [ApplicationController::class, 'arizaniKorish'])->name('arizani-korish'); 

    // Talabalardan kelib tushgan arizlalarni ko'rish sahifasi
    Route::get('/dashboard/kelgan-arizalarni-korish', [ApplicationController::class, 'show'])->name('kelgan-arizalarni-korish');

    // Talabalardan kelib tushgan arizlalarnini tahrirlash
    Route::post('/dashboard/kelgan-arizalarni-tahrirlash', [ApplicationController::class, 'tahrirlash'])->name('kelgan-arizalarni-tahrirlash');

    // Talabalardan kelib tushgan arizlalarnini o'chirish
    Route::get('/dashboard/kelgan-arizalarni-ochirish', [ApplicationController::class, 'delete'])->name('kelgan-arizalarni-ochirish');

    /*
    |--------------------------------------------------------------------------
    | Boshqa boshqaruv routerlari
    |--------------------------------------------------------------------------    
    */

    Route::get('/dashboard/ariza-qidirish', function () {
        echo "Ariza qidirish sahifasi bo'ladi!";
    })->name('dashboard.ariza-qidirish');
});

/*
|------------------------------------------------------------------------------
| Profil routerlari
|------------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
