<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo list</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/public/css/styles.css" rel="stylesheet">
    @vite('resources/css/output.css')
    <!-- <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">-->
    <!-- Styles -->

</head>

<body>
  
        <x-common.nav></x-common.nav>

        <div class=" w-1/3 mx-auto">


<form method="Post" class=" bg-violet-100 rounded-xl mt-24 p-6" action="{{ route('login.user')}}">
    @csrf

    <h1 class="text-2xl font-bold mb-4 text-center">
       Welcome Back
    </h1>
    
    <div class="w-full">

        <label for="email" class="mt-2 mb-2 inline-block font-semibold">Your email</label>
        <x-common.input type="email" name="email" id="email" placeholder="name@company.com" required=""></x-common.input>
    </div>
    <div class="w-full">
        <label for="password" class="mt-2 mb-2 inline-block font-semibold">Password</label>
        <x-common.input type="password" name="password" id="password" placeholder="••••••••" required=""></x-common.input>
    </div>
   
    
    <div class="w-full">
    <button type="submit" class="text-white font-medium w-full bg-violet-500 rounded-lg cursor-pointer hover:bg-violet-700 py-3 mt-3">Login</button>
    </div>


    
         <p class="text-sm mt-1 w-full mx-auto">Don’t have an account yet? <a href="{{ route('register')}}" class="font-medium hover:underline">Sign up</a>
      </p> 
</form>

</div>
     
</body>

</html>