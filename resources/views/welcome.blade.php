<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title >Todo list</title>

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


  <div class="w-full">
    <div class=" grid gap-8 w-screen h-screen max-w-screen-xl grid-cols-1 mx-auto text-center place-content-center ">
      <div class="font-bold text-5xl text-violet-900  " > Welcome to Todo Lists. Sign up and get started today. Or login to pickup where you left</div>

      <div class="text-center">
        <a href="{{ route('register') }}" class=" rounded px-4 py-2 text-xg text-white bg-violet-700">Sign up</a>
        <a href="{{ route('login') }}" class=" rounded px-4 py-2 text-xg text-white bg-violet-700">Login</a>
      </div>
    </div>


  </div>
</body>

</html>