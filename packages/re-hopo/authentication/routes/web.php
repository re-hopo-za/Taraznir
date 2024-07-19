<?php



use Illuminate\Support\Facades\Route;
use ReHo\Authentication\Livewire\Authentication\SignInPage;
use ReHo\Authentication\Livewire\Authentication\SignUpPage;


Route::get('sign-up', SignUpPage::class)
    ->name('sign-up');

Route::get('sign-in', SignInPage::class)
    ->name('sign-in');
