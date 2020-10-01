<?php

namespace Abe\Demande;

use Illuminate\Support\ServiceProvider;

class DemandeServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'\routes\web.php');
        $this->loadViewsFrom(__DIR__.'\views', 'demande');
        $this->loadMigrationsFrom(__DIR__.'\database\migrations');
        
        $this->publishes([__DIR__.'/config/demande.php' => config_path('demande.php')], 'config');
   
    }
    
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/demande.php', 'demande');
    }
}
