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


  <nav class="bg-violet-50 w-full z-20 top-0 left-0 fixed">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap">Todo Lists</span>
      </a>
      <div class="flex md:order-2">
        <button type="button" class="text-white bg-violet-700 font-bold hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">Get started</button>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-violet-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-violet-200" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
      
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-violet-50 md:flex-row md:space-x-8 md:mt-0">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-violet-700 rounded md:bg-transparent md:text-violet-700 md:p-0" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-violet-900 rounded md:bg-transparent md:hover:text-violet-700 md:p-0">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-violet-900 rounded md:bg-transparent md:hover:text-violet-700 md:p-0">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-violet-900 rounded md:bg-transparent md:hover:text-violet-700 md:p-0">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="w-full">
    <div class=" grid gap-8 w-screen h-screen max-w-screen-xl grid-cols-1 mx-auto text-center place-content-center ">
      <div class="font-bold text-5xl text-violet-900  " > Welcome to Todo Lists. Sign up and get started today. Or login to pickup where you left</div>

      <div class="text-center">
        <a href="{{ route('register') }}" class=" rounded px-4 py-2 rounded-md text-xg text-white bg-violet-700">Sign up</a>
        <a href="{{ route('login') }}" class=" rounded px-4 py-2 rounded-md text-xg text-white bg-violet-700">Login</a>
      </div>
    </div>


  </div>
</body>

</html>