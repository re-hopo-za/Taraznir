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
use Modules\Tutorial\app\Livewire\TutorialDetail;
use Modules\Tutorial\app\Livewire\TutorialPage;

Route::get('/tutorial' ,TutorialPage::class)
    ->name('tutorial');

Route::get('/tutorial/{slug}' ,TutorialDetail::class)
    ->name('tutorial-detail');
