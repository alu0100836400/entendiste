<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// cada vez que queramos crear un service provider, 
//la clase o el enlace que queramos crear hay que registrarlo en el service container

//tambien cuando nuestras clases implementen una interfaz

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //definimos un binding en el que registramos nuestra clase en el service container
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
