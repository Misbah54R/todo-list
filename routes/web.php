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

Route::fallback(function(){
    return view('welcome');
});



Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/login', function () {

    return view('auth.login');

})->name('login.create');

Route::post('/login' , 
    [LoginController::class, 'store']
)->name('login.store'); 

Route::delete('/login' , 
    [LoginController::class, 'destroy']
)->name('login.destroy'); 



Route::post('/register' , 
    [RegisterController::class, 'register']
)->name('register.user');  
