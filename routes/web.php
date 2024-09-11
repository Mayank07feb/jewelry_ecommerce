<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/alljewellery', [HomeController::class, 'alljewellery'])->name('alljewellery');

Route::get('/diamondjewellery', [HomeController::class, 'diamondjewellery'])->name('diamondjewellery');

Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/orderhistory', [HomeController::class, 'orderhistory'])->name('orderhistory');

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');

Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');


