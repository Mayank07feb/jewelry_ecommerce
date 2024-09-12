<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
 {
    // Method for home page
    public function index()
    {
        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function alljewellery()
    {
        return view('frontend.alljewellery');
    }

    public function diamondjewellery()
    {
        return view('frontend.diamondjewellery');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function productdetail()
    {
        return view('frontend.productdetail');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    // Method for login page
    public function login()
    {
        return view('frontend.login');
    }

    // Method for signup page
    public function signup()
    {
        return view('frontend.signup');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function orderhistory()
    {
        return view('frontend.orderhistory');
    }

    public function cancel()
    {
        return view('frontend.cancel');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function orderconfirmation()
    {
        return view('frontend.orderconfirmation');
    }

    public function ordersummary()
    {
        return view('frontend.order-summary');
    }

    public function paymentconfirmation()
    {
        return view('frontend.payment-confirmation');
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }
<<<<<<< HEAD

=======
>>>>>>> a6c02eff094aeae3e0f46173976f59681ce31438

    public function storelocator()
    {
        return view('frontend.storelocator');
<<<<<<< HEAD
    }

   
    public function franchise()
    {
        return view('frontend.franchise');

    }
=======
    } 

    // franchise
    public function franchise()
    {
        return view('frontend.franchise');
    } 
>>>>>>> a6c02eff094aeae3e0f46173976f59681ce31438
}
