<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CorreiosServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('CorreiosInterface', 'CorreiosService');
    }

}
