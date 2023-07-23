<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string'],
        ]);
        $remember = $request->filled('remember');
        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()
                ->intended('panel')
                ->with('status','You are logged in');
        }else{
            return redirect('/');
        }
        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);
    }
    function logout(Redirector $redirect,Request $request){
        Auth::logout();
        $request-session()->invalidate();
        $request-session()->regenerateToken();
        return $redirect->to('/');
    }
}
