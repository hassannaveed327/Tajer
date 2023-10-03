<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::middleware(['guest'])->group(function () {

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register') ;
});

Route::post('/register-submit',  [RegisterController::class,'register'])->name('register-submit');
Route::post('/login-submit',  [LoginController::class,'login'])->name('login-submit');

Route::post('/otp-submit',  [VerificationController::class,'otp_verification'])->name('otp_verify');

Route::get('/otp-regenerate',  [VerificationController::class,'regenerate_otp'])->name('regenerate_otp');


Route::post('/logout-submit',  [LoginController::class,'logout'])->name('logout');
Route::get('/otp-verify', function (){
    return view('auth.otp_verify');
})->name('otp.verify');


Route::middleware(['auth','otp_verified'])->group(function () {
    Route::get('/dashboard', function (){
        return view('dashboard');
    })->name('dashboard');
});

 Route::get('/', function () {
      return view('home');
 })->name('home')   ;
 Route::get('/about-us', function () {
      return view('aboutus');
 });
 Route::get('/help', function () {
      return view('contact_us');
 });
