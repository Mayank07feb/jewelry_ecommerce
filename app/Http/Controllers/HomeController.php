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
}
