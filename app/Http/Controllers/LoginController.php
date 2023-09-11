<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
     public function store(Request $request)
    {
        $attributes = $request->validate([
           
            'email' => ['required', 'email'], 
            'password' => ['required']
        ]);

        if (Auth::attempt($attributes)){


            $request->session()->regenerate();
            return redirect()->route('root');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
     public function destroy(){
     Auth::logout();
     return redirect()->back(fallback: true);
}
}
