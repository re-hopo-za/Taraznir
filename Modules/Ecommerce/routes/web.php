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
use Modules\Ecommerce\app\Livewire\Product\ProductDetail;
use Modules\Ecommerce\app\Livewire\Product\ProductPage;

Route::get('product', ProductPage::class)
    ->name('product');

Route::get('product/{slug}', ProductDetail::class)
    ->name('product-detail');

Route::get('product/category/{category}' ,ProductPage::class )
    ->name('product-category');
