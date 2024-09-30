<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signupForm()
    {
        return view('frontend.signup');
    }

    // Handle registration request
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'same:password',
        ]);

        User::create( $request->all() + ['password' => Hash::make($request->password)]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    // Show the login form
    public function loginForm()
    {
        return view('frontend.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (\auth()->user()->role == 'admin'){
                return redirect()->intended('dashboard');
            }else{
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle logout request
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        request()->session()->flash('success', 'Logged out successfully');
        return redirect('/');
    }
}
