<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ServiceImageController;
use App\Http\Controllers\ServicePagesController;

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

// Route::get('/network-infrastucture', function () {
//     return view('Services.Network_Infrastucture');
// });
Route::get('/network-infrastucture', [ServicePagesController::class, 'network_index']);

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

Route::get('/email', function() {
    Mail::to('boxroomrent@gmail.com')->send(new ContactMail());
    return new ContactMail();
});

Route::post('/sendmail/send', [SendEmailController::class, 'sendcontactmail']);

Route::group(['middleware' => ['auth']], function() {

    Route::get('/services/view', [ServiceController::class, 'index'])->name('service.view');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('service.store');
    Route::patch('/services/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');

    Route::get('/images/view', [ServiceImageController::class, 'index'])->name('image.view');
    Route::post('/images/store', [ServiceImageController::class, 'store'])->name('image.store');
    Route::patch('/images/update/{id}', [ServiceImageController::class, 'update'])->name('image.update');
    Route::delete('/images/delete/{id}', [ServiceImageController::class, 'destroy'])->name('image.delete');

});