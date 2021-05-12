<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::get('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'forgot-password'])->name('forgot-password');
Route::get('/reset-password', [App\Http\Controllers\ResetPasswordController::class, 'reset-password'])->name('reset-password');




Route::get('/reset-email',function(){
    $to_name = 'anamika kamal';
    $to_email = "anamikakamal1999@gmail.com";
    $data = array('name'=> 'anamika', 'body'=>"Test mail like");
    Mail::send('mail', $data , function($message) use ($to_name, $to_email){
        $message->to($to_email)
        ->subject('testing mail');
    });
});