<?php

namespace App\Providers;

use App\Models\Food;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class FoodServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share('allFoods', 'Food::all();');
        $allFoods = Food::all();
        view()->share('allFoods', $allFoods);
    }
}
