<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/home', function () {
        return view('vue.home');
    });
    Route::get('/products', function () {
        return view('vue.products');
    });

    Route::get('/cookinup-home', function () {
        return view('vue-cookinup.home');
    });
    Route::get('/cookinup-products', function () {
        return view('vue-cookinup.products');
    });


});

require __DIR__.'/auth.php';
