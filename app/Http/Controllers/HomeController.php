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

    public function silver()
    {
        return view('frontend.silver');
    }

    public function gold()
    {
        return view('frontend.gold');
    }

    public function bullions()
    {
        return view('frontend.bullions');
    }

    public function showBlogs()
    {
        return view('frontend.blogs');
    }

    public function showBlogDetails()
    {
        return view('frontend.blog-details');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function page404()
    {
        return view('frontend.404');
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

    public function showForgotPasswordForm()
    {
        return view('frontend.forgot-password');
    }

    public function showResetPasswordForm()
    {
        return view('frontend.reset-password');
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
    public function storelocator()
    {
        return view('frontend.storelocator');
    }
    // Method for franchise page
    public function franchise()
    {
        return view('frontend.franchise');
    }

    public function collection()
    {
        return view('frontend.collection');
    }

    public function collectiondetails()
    {
        return view('frontend.collectiondetails');
    }

    // cumtomize jewwlery
    public function customjewellery()
    {
        return view('frontend.customjewellery');
    }
}
