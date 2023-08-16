<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;


Route::get('/', function () {
    return view('index');
})->name('site');

 // Talabalardan kelib tushgan arizlalarni listi
 Route::post('/kelgan', [ApplicationController::class, 'store'])->name('kelgan_arizalar_store');


/*
|--------------------------------------------------------------------------
| Boshqaruv panelini routerlari
|--------------------------------------------------------------------------    
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // Boshqaruv paneli asosiy sahifasini routeri
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');    
    
    /*
    |------------------------------------------------------------------------------
    | Talabalardan kelgan arizalarni ko'rish va tahrirlash sahifalarini routerlari
    |------------------------------------------------------------------------------
    */

    // Talabalardan kelib tushgan arizlalarni listi
    Route::get('/dashboard/kelgan-arizalar', [ApplicationController::class, 'index'])->name('dashboard.kelgan-arizalar'); 

    // Talabalardan kelib tushgan arizlalarni ko'rish sahifasi
    Route::get('/dashboard/kelgan-arizalarni-korish', [ApplicationController::class, 'show'])->name('dashboard.kelgan-arizalarni-korish');

    // Talabalardan kelib tushgan arizlalarnini tahrirlash
    Route::get('/dashboard/kelgan-arizalarni-tahrirlash', [ApplicationController::class, 'edite'])->name('dashboard.kelgan-arizalarni-tahrirlash');

    // Talabalardan kelib tushgan arizlalarnini o'chirish
    Route::get('/dashboard/kelgan-arizalarni-ochirish', [ApplicationController::class, 'delete'])->name('dashboard.kelgan-arizalarni-ochirish');

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
