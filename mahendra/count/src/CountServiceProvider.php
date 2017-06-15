<?php

namespace Mahendra\Count;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Mahendra\Count\Commands\DbCount;

class CountServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {   
        $this->commands(
            DbCount::class
        );
    }
}
