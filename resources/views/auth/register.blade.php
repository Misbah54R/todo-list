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
    <section class="bg-violet-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 p-4">
            <a href="#" class="flex items-center mb-6 text-3xl font-semibold text-violet-900">
                <img class="w-8 h-8 mr-3" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
               ToDo Lists
            </a>
            <div class="bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8bg-violet-200">
                    <h1 class="text-6xl font-bold leading-tight text-center text-violet-900 md:text-2xl">
                        Sign Up
                    </h1>
                    <form method="Post" class="space-y-4 md:space-y-6 px-5" action="{{ route('register.user')}}">
                        @csrf 
                        <div>
                            
                            <label for="email" class="my-2 block ext-sm font-medium text-violet-900">Your email</label>
                            <input type="email" name="email" id="email" class="my-2 w-full border-b border-violet-300  text-violet-900 sm:text-sm font-semibold block" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="my-2 block text-sm font-medium text-violet-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="my-2 w-full border-b border-violet-300 text-violet-900 sm:text-sm focus:ring-violet-200 focus:border-violet-200 block" required="">
                        </div>
                        <div>
                            <label for="confirm-password" class="my-2 block text-sm font-medium text-violet-900">Confirm password</label>
                            <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="my-2 w-full border-b border-violet-300 text-violet-900 sm:text-sm focus:ring-violet-200 focus:border-violet-200 block" required="">
                        </div>
                        <div class="flex items-start p-4">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="my-2 w-4 h-4 border border-violet-300 rounded bg-violet-50 focus:ring-3 focus:ring-primary-300" required="">
                            </div>
                            <div class="ml-15 text-sm">
                                <label for="terms" class="font-light text-violet-500">I accept the <a class="font-medium text-violet-50 hover:underlinef" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                       
                        <button type="submit" class="text-white w-full bg-violet-700 hover:bg-violet-700 rounded py-1 px-5">Sign Up</button> 
                    
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>