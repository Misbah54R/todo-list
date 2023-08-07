<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
           $attributes = $request->validate([
            'name' => ['required' , 'min:3' , 'max:255'] ,
            'email' => ['required' , 'email' , 'unique:users.email'], 
           'password' => ['required', 'regex:/[A-Z]+/' ,'regex:/[0-9]+/','regex:/[a-z]+/' , 'confirmed']
           ]);
            return "HelloWorld";
    }
}

