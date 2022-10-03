<?php

namespace App\Providers;

use App\Contracts\ReaderInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $default = config('log.default');
        $reader = config("log.{$default}.class");

        $this->app->bind(
            ReaderInterface::class, // the reader interface
            $reader
        );

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
