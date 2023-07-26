<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        if (!Auth::check()) {
            return view('login.login');
        }
        return view('internas.panel');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) {
            return redirect()->to('/')->withErrors('Username and/or Pasword is incorrect');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request,$user);
    }

    public function authenticated(){
        return redirect('panel');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->to('/');
    }
}
