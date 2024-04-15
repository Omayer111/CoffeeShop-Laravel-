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
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        
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
       
        
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        }
        else{
            return back()->with('error', 'Invalid credentials');
        }
    }
}