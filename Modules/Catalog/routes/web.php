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
use Modules\Catalog\app\Livewire\CatalogDetail;
use Modules\Catalog\app\Livewire\CatalogPage;

Route::get('/catalog' , CatalogPage::class)
    ->name('catalog');

Route::get('catalog/{slug}' , CatalogDetail::class)
    ->name('catalog-detail');
