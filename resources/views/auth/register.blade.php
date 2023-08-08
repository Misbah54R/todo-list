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
        <x-flash-message />
    <div class=" w-1/3 mx-auto">


        <form method="Post" class=" bg-violet-100 rounded-xl mt-24 p-6" action="{{ route('register.user')}}">
            @csrf

            <h1 class="text-2xl font-bold mb-4 text-center">
                Register
            </h1>
            <div class="w-full">

                <label for="name" class="mb-2 inline-block font-semibold">Name</label>
                <x-common.input type="text" name="name" id="name" placeholder="Your Name" value="{{old('name')}}"></x-common.input>
               
           
                @error('name')
                <div class="text-sm text-red-700">{{ $message }}</div>
                @enderror
                              
            
            </div>
            <div class="w-full">

                <label for="email" class="mt-2 mb-2 inline-block font-semibold">Your email</label>
                <x-common.input type="email" name="email" id="email" placeholder="you@cexample.com" value="{{old('email')}}"></x-common.input>
               
               
                @error('email')
                <div class="text-sm text-red-700">{{ $message }}</div>
                @enderror  


            </div>
            <div class="w-full">
                <label for="password" class="mt-2 mb-2 inline-block font-semibold">Password</label>
                <x-common.input type="password" name="password" id="password" placeholder="••••••••" value="{{old('password')}}"></x-common.input>
               
               
                 @error('password')
                <div class="text-sm text-red-700">{{ $message }}</div>
                @enderror 


            </div>
            <div class="w-full">
                <label for="password_confirmation" class="mt-2 mb-2 inline-block font-semibold">Confirm password</label>
                <x-common.input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" ></x-common.input>
            </div>
            <div class="w-full m-1 text-sm">

                <input id="terms" aria-describedby="terms" type="checkbox" required=""></input>


                <label for="terms">I accept the <a class="font-medium hover:underline" href="#">Terms and Conditions</a></label>

            </div>
            <div class="w-full">
                <input type="submit" class="text-white font-medium w-full bg-violet-500 rounded-lg cursor-pointer hover:bg-violet-700 py-3 mt-3">
            </div>
        </form>

    </div>

</body>

</html>