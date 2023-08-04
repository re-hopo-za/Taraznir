<?php


use Modules\User\Http\Controllers\Api\AuthController;
use Modules\User\Http\Controllers\Api\VerificationController;
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


Route::group(['prefix' => 'auth' ,'as' => 'auth.' ,'middleware' => 'throttle:1,60'] ,function(){

    Route::post('/send-sign-up-code' ,[AuthController::class ,'sendSignUpCode'])
        ->name('send_sign_up_code');

    Route::post('/send-sign-in-code' ,[AuthController::class ,'sendSignInCode'])
        ->name('send_sign_in_code');

    Route::post('/verify/sign-up' ,[VerificationController::class ,'verifySignUp'])
        ->name('verify.sign_up');

    Route::post('/verify/sign-in-by-code' ,[VerificationController::class ,'verifySignInByCode'])
        ->name('verify.sign_in_by_code');


    Route::post('/verify/sign-in-by-mobile-and-password' ,[VerificationController::class ,'verifySignInByPassword'])
        ->name('verify.sign_in_by_mobile_and_password');

    Route::post('/verify/sign-in-by-email-and-password' ,[VerificationController::class ,'verifySignInByPassword'])
        ->name('verify.sign_in_by_email_and_password');



});
