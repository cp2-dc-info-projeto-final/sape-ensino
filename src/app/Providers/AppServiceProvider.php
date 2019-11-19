<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Escolas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\posts_escola;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        //View Composers
        //Data das escolas
        view()->composer(['Paginas.Escolas.escolas'], function ($view) {
            $view->with('escolas',  Escolas::showescolas());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
