<?php

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


use Illuminate\Support\Facades\Route;
use Modules\User\app\Livewire\Authentication\SignInPage;
use Modules\User\app\Livewire\Authentication\SignUpPage;


Route::get('sign-up', SignUpPage::class)
    ->name('sign-up');

Route::get('sign-in', SignInPage::class)
    ->name('sign-in');
