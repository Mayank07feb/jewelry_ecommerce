<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('/forgot-password', [HomeController::class, 'showForgotPasswordForm'])->name('forgot.password');

Route::get('/reset-password', [HomeController::class, 'showResetPasswordForm'])->name('password.reset');





Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/alljewellery', [HomeController::class, 'alljewellery'])->name('alljewellery');

Route::get('/diamondjewellery', [HomeController::class, 'diamondjewellery'])->name('diamondjewellery');

Route::get('/gold', [HomeController::class, 'gold'])->name('gold');

Route::get('/bullions', [HomeController::class, 'bullions'])->name('bullions');

Route::get('/silver', [HomeController::class, 'silver'])->name('silver');

Route::get('/blogs', [HomeController::class, 'showBlogs'])->name('blogs');

Route::get('/blog-details', [HomeController::class, 'showBlogDetails'])->name('blog.details');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/policies', [HomeController::class, 'policies'])->name('policies');

Route::get('/giritra-promises', [HomeController::class, 'giritraPromises'])->name('giritra.promises');

Route::get('/page404', [HomeController::class, 'page404'])->name('page404');


Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');


Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');

Route::get('/orderconfirmation', [HomeController::class, 'orderconfirmation'])->name('orderconfirmation');


// New Routes
Route::get('/ordersummary', [HomeController::class, 'ordersummary'])->name('ordersummary');

Route::get('/paymentconfirmation', [HomeController::class, 'paymentconfirmation'])->name('paymentconfirmation');

Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');

Route::get('/storelocator',[HomeController::class,'storelocator'])->name('storelocator');

Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');

Route::get('/collection', [HomeController::class, 'collection'])->name('collection');


Route::get('/collectiondetails', [HomeController::class, 'collectiondetails'])->name('collectiondetails');

Route::get('/customjewellery', [HomeController::class, 'customjewellery'])->name('customjewellery');

Route::get('/ourstory', [HomeController::class, 'ourstory'])->name('ourstory');

Route::get('/jewellerycareguide', [HomeController::class, 'jewellerycareguide'])->name('jewellerycareguide');

Route::get('/gemstone', [HomeController::class, 'gemstone'])->name('gemstone');



Route::middleware('auth')->group(function(){
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/orderhistory', [HomeController::class, 'orderhistory'])->name('orderhistory');
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');


    //backend routes

    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('banner')->name('banner.')->group(function(){
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::get('create', [BannerController::class, 'create'])->name('create');
        Route::post('store', [BannerController::class, 'store'])->name('store');
        Route::get('edit/{banner}', [BannerController::class, 'edit'])->name('edit');
        Route::post('update/{banner}', [BannerController::class, 'update'])->name('update');
        Route::post('destroy', [BannerController::class, 'delete'])->name('destroy');
    });
});
