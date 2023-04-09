<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function signIn(){
        return view('auth/sign_in');
    }
    
    function handleSignIn(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Xác thực thông tin đăng nhập thành công

            return redirect()->intended('/workers');
        }

        // Xác thực thông tin đăng nhập không thành công
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
    }

    function signUp(){
        return view('auth/sign_up');
    }

    function handleSignUp(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        return redirect()->intended('/sign-in');
    }

    function handleSignOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('auth/sign_in');
    }
}
