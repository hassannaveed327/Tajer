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

Route::post('/register-submit',  [RegisterController::class,'register'])->name('register-submit');
Route::post('/otp-submit',  [VerificationController::class,'otp_verify'])->name('otp_verify');
Route::post('/login-submit',  [LoginController::class,'login'])->name('login-submit');
Route::post('/logout-submit',  [LoginController::class,'logout'])->name('logout');
Route::get('/otp-verify', function (){
    return view('auth.otp_verify');
})->name('verification.otp');
 Route::get('/login', function () {
      return view('auth.login');
 })->name('login');
 Route::get('/register', function () {
      return view('auth.register');
 })->name('register') ;
 Route::get('/', function () {
      return view('home');
 });
 Route::get('/about-us', function () {
      return view('aboutus');
 });
 Route::get('/help', function () {
      return view('contact_us');
 });
