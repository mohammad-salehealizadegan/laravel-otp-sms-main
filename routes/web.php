<?php

use Harirsoft\OtpAuth\Controller\OtpVerifySmsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('ii',function (){
    dd(1);
});
Route::prefix('OtpAuth')->name('OtpAuth.')->group(function (){
    Route::get('ii',function (){
        dd(1);
    });
    Route::post('login',[OtpVerifySmsController::class,'otpLogin'])->name('login');
});

