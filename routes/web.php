<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use \App\Http\Middleware\AdminMiddleware;
use \App\Http\Controllers\BrandController;
use \App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('/forgot-password', [HomeController::class, 'showForgotPasswordForm'])->name('forgot.password');

Route::get('/reset-password', [HomeController::class, 'showResetPasswordForm'])->name('password.reset');





Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/alljewellery/{material?}/{category?}', [HomeController::class, 'alljewellery'])->name('alljewellery');

Route::get('/diamondjewellery', [HomeController::class, 'diamondjewellery'])->name('diamondjewellery');

Route::get('/gold', [HomeController::class, 'gold'])->name('gold');

Route::get('/bullions', [HomeController::class, 'bullions'])->name('bullions');

Route::get('/silver', [HomeController::class, 'silver'])->name('silver');

Route::get('/blogs', [HomeController::class, 'showBlogs'])->name('blogs');

Route::get('/blog-details', [HomeController::class, 'showBlogDetails'])->name('blog.details');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/policies/{slug?}', [HomeController::class, 'policies'])->name('policies');

Route::get('/giritra-promises', [HomeController::class, 'giritraPromises'])->name('giritra.promises');

Route::get('/page404', [HomeController::class, 'page404'])->name('page404');


Route::get('/productdetail/{product}/{variation?}', [HomeController::class, 'productdetail'])->name('productdetail');


Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');


// New Routes
Route::get('/ordersummary', [HomeController::class, 'ordersummary'])->name('ordersummary');

Route::get('/paymentconfirmation', [HomeController::class, 'paymentconfirmation'])->name('paymentconfirmation');

Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');

Route::get('/track', [HomeController::class, 'track'])->name('track');

Route::get('/storelocator',[HomeController::class,'storelocator'])->name('storelocator');

Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');

Route::get('/collection', [HomeController::class, 'collection'])->name('collection');


Route::get('/collectiondetails', [HomeController::class, 'collectiondetails'])->name('collectiondetails');

Route::get('/customjewellery', [HomeController::class, 'customjewellery'])->name('customjewellery');

Route::get('/ourstory', [HomeController::class, 'ourstory'])->name('ourstory');

Route::get('/jewellerycareguide', [HomeController::class, 'jewellerycareguide'])->name('jewellerycareguide');

Route::get('/gemstone', [HomeController::class, 'gemstone'])->name('gemstone');

Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');

Route::middleware('auth')->group(function(){
    Route::get('/orderhistory', [HomeController::class, 'orderhistory'])->name('orderhistory');
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('wishlist/delete/{wishlist}', [\App\Http\Controllers\WishlistController::class, 'delete'])->name('wishlist.delete');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
//    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
    Route::get('addToCart/{product}/{variation}/{wishlist?}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('/orderconfirmation', [HomeController::class, 'orderconfirmation'])->name('orderconfirmation');

    Route::prefix('profile')->name('profile')->group(function(){
        Route::get('/', [HomeController::class, 'profile']);
        Route::post('update/{user}', [HomeController::class, 'updateProfile'])->name('.update');
    });


    Route::prefix('order')->name('order.')->group(function(){
       Route::post('place', [OrderController::class, 'placeOrder'])->name('place');
       Route::post('status/{order}', [OrderController::class, 'orderStatus'])->name('status');
       Route::get('returnForm/{order}', [OrderController::class, 'returnForm'])->name('returnForm');
       Route::post('return/{order}', [OrderController::class, 'returnOrder'])->name('return');
    });

    Route::prefix('cart')->name('cart')->group(function(){
       Route::get('/', [HomeController::class, 'cart']);
       Route::post('delete/{cart}', [CartController::class, 'delete'])->name('.delete');
       Route::get('update/{item}/{type}', [CartController::class, 'update'])->name('.update');
    });
    Route::get('addToWishlist/{product}', [App\Http\Controllers\WishlistController::class, 'addToWishlist'])->name('addToWishlist');


    //backend routes
    Route::middleware(AdminMiddleware::class)->group(function(){
        Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('banner')->name('banner.')->group(function(){
            Route::get('/', [BannerController::class, 'index'])->name('index');
            Route::get('create', [BannerController::class, 'create'])->name('create');
            Route::post('store', [BannerController::class, 'store'])->name('store');
            Route::get('edit/{banner}', [BannerController::class, 'edit'])->name('edit');
            Route::post('update/{banner}', [BannerController::class, 'update'])->name('update');
            Route::post('destroy/{banner}', [BannerController::class, 'delete'])->name('destroy');
        });

        Route::prefix('category')->name('category.')->group(function(){
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('create', [CategoryController::class, 'create'])->name('create');
            Route::post('store', [CategoryController::class, 'store'])->name('store');
            Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('update/{category}', [CategoryController::class, 'update'])->name('update');
            Route::post('destroy/{category}', [CategoryController::class, 'delete'])->name('destroy');
            Route::post('child/{id}', [CategoryController::class, 'childCategories'])->name('child');
        });

        Route::prefix('brand')->name('brand.')->group(function(){
            Route::get('/', [BrandController::class, 'index'])->name('index');
            Route::get('create', [BrandController::class, 'create'])->name('create');
            Route::post('store', [BrandController::class, 'store'])->name('store');
            Route::get('edit/{brand}', [BrandController::class, 'edit'])->name('edit');
            Route::post('update/{brand}', [BrandController::class, 'update'])->name('update');
            Route::post('destroy/{brand}', [BrandController::class, 'delete'])->name('destroy');
        });

        Route::prefix('product')->name('product.')->group(function(){
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('create', [ProductController::class, 'create'])->name('create');
            Route::post('store', [ProductController::class, 'store'])->name('store');
            Route::get('edit/{product}', [ProductController::class, 'edit'])->name('edit');
            Route::post('update/{product}', [ProductController::class, 'update'])->name('update');
            Route::post('destroy/{product}', [ProductController::class, 'delete'])->name('destroy');
            Route::get('image/delete/{image}', [ProductController::class, 'imageDelete'])->name('image.delete');
            Route::get('variation/delete/{variation}', [ProductController::class, 'variationDelete'])->name('variation.delete');
        });

        Route::prefix('orders')->name('orders.')->group(function(){
           Route::get('/', [OrderController::class, 'index'])->name('index');
           Route::post('status/{order}', [OrderController::class, 'order_status'])->name('status');
           Route::get('items/{order}', [OrderController::class, 'order_items'])->name('items');
        });

        // return routes
        Route::prefix('return')->name('return.')->group(function(){
           Route::get('/', [\App\Http\Controllers\ReturnOrderController::class, 'index'])->name('index');
           Route::post('/status/{return}', [\App\Http\Controllers\ReturnOrderController::class, 'returnStatus'])->name('status');
        });

        //pages routes
        Route::prefix('page')->name('page.')->group(function(){
           Route::get('/', [PageCOntroller::class, 'index'])->name('index');
           Route::get('create', [PageController::class, 'create'])->name('create');
           Route::post('store', [PageController::class, 'store'])->name('store');
           Route::get('edit/{page}', [PageController::class, 'edit'])->name('edit');
           Route::post('update/{page}', [PageController::class, 'update'])->name('update');
           Route::post('delete/{page}', [PageController::class, 'delete'])->name('delete');
        });

         //post category

        Route::get('postCategory/index',[PostCategoryController::class,'index'])->name('postCategory.index');
        Route::get('postCategory/create',[PostCategoryController::class,'create'])->name('postCategory.create');
        Route::post('postCategory/store',[PostCategoryController::class,'store'])->name('postCategory.store');
        Route::get('postCategory/edit/{postCategory}',[PostCategoryController::class,'edit'])->name('postCategory.edit');
        Route::get('postCategory/delete/{postCategory}',[PostCategoryController::class,'delete'])->name('postCategory.delete');
        Route::get('postCategory/duplicate/{postCategory}',[PostCategoryController::class,'duplicate'])->name('postCategory.duplicate');
        Route::post('postCategory/update/{postCategory}',[PostCategoryController::class,'update'])->name('postCategory.update');

      //post

        Route::get('post/index',[PostController::class,'index'])->name('post.index');
        Route::get('post/create',[PostController::class,'create'])->name('post.create');
        Route::post('post/store',[PostController::class,'store'])->name('post.store');
        Route::get('post/edit/{post}',[PostController::class,'edit'])->name('post.edit');
        Route::get('post/delete/{post}',[PostController::class,'delete'])->name('post.delete');
        Route::get('post/duplicate/{post}',[PostController::class,'duplicate'])->name('post.duplicate');
        Route::post('post/update/{post}',[PostController::class,'update'])->name('post.update');


        Route::get('contact/index',[ContactController::class,'index'])->name('contact.index');
        Route::get('contact/create',[ContactController::class,'create'])->name('contact.create');

        Route::get('contact/edit/{contact}',[ContactController::class,'edit'])->name('contact.edit');
        Route::get('contact/delete/{contact}',[ContactController::class,'delete'])->name('contact.delete');
        Route::get('contact/duplicate/{contact}',[ContactController::class,'duplicate'])->name('contact.duplicate');
        Route::post('contact/update/{contact}',[ContactController::class,'update'])->name('contact.update');



        // Route to show comments for a specific post
//        Route::get('posts/{post}/comments', [PostCommentController::class, 'index'])->name('comments.index');

// Route to show the form for creating a new comment for a post
        // Route to show the form for creating a new comment for a post
//        Route::get('posts/{post}/comments/create', [PostCommentController::class, 'create'])->name('comments.create');


// Route to store a new comment
//        Route::post('comments', [PostCommentController::class, 'store'])->name('comments.store');

// Route to show the form for editing a comment
//        Route::get('comments/{comment}/edit', [PostCommentController::class, 'edit'])->name('comments.edit');

// Route to update a comment
//        Route::post('comments/{comment}', [PostCommentController::class, 'update'])->name('comments.update');

// Route to delete a comment
//        Route::get('comments/{comment}', [PostCommentController::class, 'destroy'])->name('comments.destroy');

    });

});
