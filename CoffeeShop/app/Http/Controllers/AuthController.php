<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function home()
    {
        return view('thanks');
    }
    public function index()
    {
        return view('auth.login');
    }

    public function CheckIfLoggedIn()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        } else {
            return redirect()->route('login');
        }
    }
    
    
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        $user = auth()->user();
        
        if ($user->usertype == 1) {
            return view('auth.dashboard');
        } else {
            auth()->logout();
            return back()->with('error', 'Access denied. Invalid user type.');
        }
    }

    // If authentication fails, redirect back with an error message
    return back()->with('error', 'Invalid credentials');
}

    public function register()
    {
        return view('auth.register');
    }

    public function register_now(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
    ]);
    
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);
   
    // Redirect the user to the login page
    return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
}

}