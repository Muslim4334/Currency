<?php

namespace Muslim\Currency;

use Illuminate\Support\ServiceProvider;

class CurrencyServiceProvider extends ServiceProvider {

    public function boot()
     {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views', 'currency');
        $this->loadMigrationsFrom(__DIR__. '/Database/Migrations');
     }

    public function register()
    {

    }
}
