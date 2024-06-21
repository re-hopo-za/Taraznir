<?php

use Illuminate\Support\Facades\Route;
use Modules\Misc\app\Livewire\Pages\AboutPage;
use Modules\Misc\app\Livewire\Pages\ContactPage;
use Modules\Misc\app\Livewire\Pages\HomePage;
use Modules\Misc\app\Livewire\Pages\SearchPage;

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


Route::get('/' , HomePage::class)
    ->name('/');

Route::get('/contact' , ContactPage::class)
    ->name('contact');

Route::get('/about' , AboutPage::class)
    ->name('about');

Route::get('/search' , SearchPage::class)
    ->name('search');

