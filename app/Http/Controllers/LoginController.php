<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
     public function login(Request $request)
    {
        $attributes = $request->validate([
           
            'email' => ['required', 'email'], 
            'password' => ['required']
        ]);

        if (Auth::attempt($attributes)){

            return redirect()->route('home');
        }
               return redirect()->back();
    
    }
}
