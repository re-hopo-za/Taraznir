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
use Modules\User\app\Livewire\ProfilePage;
use Modules\User\app\Livewire\SignInPage;
use Modules\User\app\Livewire\SignUpPage;

Route::get('sign-up', SignUpPage::class)
    ->name('sign-up')
    ->middleware('guest');

Route::get('sign-in', SignInPage::class)
    ->name('sign-in')
    ->middleware('guest');

Route::get('profile', ProfilePage::class)
    ->name('profile')
    ->middleware('auth');

