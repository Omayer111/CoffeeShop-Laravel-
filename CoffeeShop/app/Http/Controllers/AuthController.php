<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;


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
    if (Session::has('user')) {
        $user = Session::get('user');

        $userExists = DB::table('users')->where('id', $user['id'])->exists();

        if ($userExists) {
            return view('auth.dashboard');
        }
    }

    if (Cookie::has('user')) {
        $user = json_decode(Cookie::get('user'), true);

        $userExists = DB::table('users')->where('id', $user['id'])->exists();

        if ($userExists) {
            Session::put('user', $user);

            return view('auth.dashboard');
        }
    }

    return redirect()->route('login');
}

    
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        $user = DB::table('users')->where('email', $credentials['email'])->first();
        
        if ($user && Hash::check($credentials['password'], $user->password)) {
            
            if ($user->usertype == 1) {
                Session::put('user', (array) $user);
    
                Cookie::queue('user', json_encode((array) $user), 120); // Store for 120 minutes
    
                return view('auth.dashboard');
            } else {
                Session::forget('user');
                Cookie::queue(Cookie::forget('user'));
                
                return back()->with('error', 'Access denied. Invalid user type.');
            }
        }
    
        return back()->with('error', 'Invalid credentials');
    }
    
    public function logout()
    {
        Session::forget('user');
        Cookie::queue(Cookie::forget('user'));
    
        return redirect()->route('login');
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