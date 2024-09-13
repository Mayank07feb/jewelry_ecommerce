<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/alljewellery', [HomeController::class, 'alljewellery'])->name('alljewellery');

Route::get('/diamondjewellery', [HomeController::class, 'diamondjewellery'])->name('diamondjewellery');

Route::get('/gold', [HomeController::class, 'gold'])->name('gold');

Route::get('/bullions', [HomeController::class, 'bullions'])->name('bullions');

Route::get('/silver', [HomeController::class, 'silver'])->name('silver');

Route::get('/page404', [HomeController::class, 'page404'])->name('page404');

Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/orderhistory', [HomeController::class, 'orderhistory'])->name('orderhistory');

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');

Route::get('/orderconfirmation', [HomeController::class, 'orderconfirmation'])->name('orderconfirmation');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');

Route::get('/forgot-password', [HomeController::class, 'showForgotPasswordForm'])->name('forgot.password');

Route::get('/reset-password', [HomeController::class, 'showResetPasswordForm'])->name('password.reset');


// New Routes
Route::get('/ordersummary', [HomeController::class, 'ordersummary'])->name('ordersummary');

Route::get('/paymentconfirmation', [HomeController::class, 'paymentconfirmation'])->name('paymentconfirmation');

Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');

Route::get('/storelocator',[HomeController::class,'storelocator'])->name('storelocator');

Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');

Route::get('/collection', [HomeController::class, 'collection'])->name('collection');

Route::get('/customjewellery', [HomeController::class, 'customjewellery'])->name('customjewellery');