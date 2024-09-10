<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.Diamond');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/alljewellery', [HomeController::class, 'alljewellery'])->name('alljewellery');

Route::get('/diamondjewellery', [HomeController::class, 'diamondjewellery'])->name('diamondjewellery');

Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');


