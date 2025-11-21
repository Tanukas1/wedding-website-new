<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});
Route::view('/','pages.first');
Route::view('/index','pages.index');
Route::view('/thank-you','pages.thankyou');
Route::post('/send-form-email', [FormController::class, 'sendEmail'])
     ->name('send.form.email');
