<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('root');



Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/login', function () {

    return view('auth.login');

})->name('login');

Route::post('/login' , 
    [LoginController::class, 'Login']
)->name('login.user'); 


Route::post('/register' , 
    [RegisterController::class, 'register']
)->name('register.user');  



Route::get('/home' , 
    [HomeController::class, 'home']
)->name('home');  