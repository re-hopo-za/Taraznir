<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CacheAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make All Cache';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo Artisan::call('view:cache');
        echo Artisan::call('config:cache');
        echo Artisan::call('route:cache');
    }
}
