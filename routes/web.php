<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});
Route::view('/','pages.index');
Route::view('/home','pages.home');
Route::view('/thank-you','pages.thankyou');
Route::post('/send-form-email', [FormController::class, 'sendEmail'])
     ->name('send.form.email');
