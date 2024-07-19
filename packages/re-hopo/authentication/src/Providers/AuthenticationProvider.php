<?php

namespace ReHo\Authentication\Providers;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;
use ReHo\Authentication\Livewire\Authentication\SignInPage;
use ReHo\Authentication\Livewire\Authentication\SignUpPage;
use ReHo\Authentication\Livewire\Authentication\SmsSection;

class AuthenticationProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $root =__DIR__.'/../../';

        AboutCommand::add('Auth Package', fn () => ['Version' => '1.0.0']);

        $this->loadMigrationsFrom("$root/database/migrations");
        $this->loadRoutesFrom("$root/routes/");
        $this->loadViewsFrom("$root/resources/views" , 'auth');
    }



    public function register(): void
    {
        Livewire::component('auth:sign-up', SignUpPage::class);
        Livewire::component('auth:sign-in', SignInPage::class);
        Livewire::component('auth:sms-section', SmsSection::class);
    }



}
