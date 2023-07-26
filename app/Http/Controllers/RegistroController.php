<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function show(){
        if (!Auth::check()) {
            return view('login.nueva-cuenta');
        }
        return view('internas.panel');
    }

    public function register(RegistroRequest $request){
        $user = User::create($request->validated());
        return redirect('/')->with('success', 'Account created successfully');
    }
}
