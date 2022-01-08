<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\GoogleController;

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
    return view('index');
});

Route::get('/services', function () {
    return view('template');
});

Route::get('/surveillance-system', function () {
    return view('Services.Surveillance_System');
});

Route::get('/digital-display', function () {
    return view('Services.Digital_Display');
});

Route::get('/network-infrastucture', function () {
    return view('Services.Network_Infrastucture');
});

Route::get('/speech-system', function () {
    return view('Services.Speech_System');
});

Route::get('/web-development', function () {
    return view('Services.Web_Development');
});

Route::get('/wifi-solution', function () {
    return view('Services.WiFi_Solutions');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/google/redirect', [GoogleController::class, 'handleGoogleRedirect'])->name('login.google');

Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);