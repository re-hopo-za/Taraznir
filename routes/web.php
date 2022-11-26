<?php

use App\Http\Livewire\Components\CommentForm;
use App\Http\Livewire\Pages\AboutPage;
use App\Http\Livewire\Pages\BlogPage;
use App\Http\Livewire\Pages\BlogSingle;
use App\Http\Livewire\Pages\CatalogPage;
use App\Http\Livewire\Pages\CatalogSingle;
use App\Http\Livewire\Pages\ContactPage;
use App\Http\Livewire\Pages\HomePage;
use App\Http\Livewire\Pages\ProductCategory;
use App\Http\Livewire\Pages\ProductPage;
use App\Http\Livewire\Pages\ProductSingle;
use App\Http\Livewire\Pages\ProjectPage;
use App\Http\Livewire\Pages\ProjectSingle;
use App\Http\Livewire\Pages\ResourceCategory;
use App\Http\Livewire\Pages\ResourcePage;
use App\Http\Livewire\Pages\ResourceSingle;
use App\Http\Livewire\Pages\ServicePage;
use App\Http\Livewire\Pages\ServiceSingle;
use App\Http\Livewire\Pages\StandardPage;
use App\Http\Livewire\Pages\StandardSingle;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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


Route::get('/' , HomePage::class )
    ->name('/');

Route::get('/contact' , ContactPage::class )
    ->name('Contact');

Route::get('/about' , AboutPage::class )
    ->name('About');


Route::group(['prefix' => '/service'] , function(){
    Route::get('/' , ServicePage::class )
        ->name('Service');
    Route::get('/{slug}' , ServiceSingle::class )
        ->name('SingleService');
    Route::get('/category/{category}' , ServicePage::class )
        ->name('CategoryService');
});


Route::group(['prefix' => '/project'] , function(){
    Route::get('/' , ProjectPage::class )
        ->name('Project');
    Route::get('/{slug}' , ProjectSingle::class )
        ->name('SingleProject');
    Route::get('/category/{category}' , ProjectPage::class )
        ->name('CategoryProject');
});


Route::group(['prefix' => '/blog'] , function(){
    Route::get('/' , BlogPage::class )
        ->name('Blog');
    Route::get('/{slug}' , BlogSingle::class )
        ->name('SingleBlog');
    Route::get('/category/{category}' , BlogPage::class )
        ->name('CategoryBlog');
});


Route::group(['prefix' => '/product'] , function(){
    Route::get('/' , ProductPage::class )
        ->name('Product');
    Route::get('/{slug}' , ProductSingle::class )
        ->name('SingleProduct');
    Route::get('/category/{category}' ,ProductPage::class )
        ->name('CategoryProduct');
});

Route::group(['prefix' => '/resource'] , function(){
    Route::get('/' , ResourcePage::class )
        ->name('Resource');
});

Route::group(['prefix' => '/standard'] , function(){
    Route::get('/' ,StandardPage::class )
        ->name('Standard');
    Route::get('/{slug}' ,StandardSingle::class )
        ->name('SingleStandard');
    Route::get('/category/{category}' ,StandardPage::class )
        ->name('CategoryStandard');
});


Route::group(['prefix' => '/catalog'] , function(){
    Route::get('/' ,CatalogPage::class )
        ->name('Catalog');
    Route::get('/{slug}' ,CatalogSingle::class )
        ->name('SingleCatalog');
    Route::get('/category/{category}' , CatalogPage::class )
        ->name('CategoryCatalog');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/dashboard' , function(){
    return redirect()->route('/');

});



