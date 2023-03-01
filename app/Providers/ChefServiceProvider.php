<?php

namespace App\Providers;

use App\Models\FoodChef;
use Illuminate\Support\ServiceProvider;

class ChefServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $foodChefs = FoodChef::all();
        view()->share('foodChefs', $foodChefs);
    }
}
