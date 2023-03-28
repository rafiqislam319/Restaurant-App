<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
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
        // $userId = Auth::id();
        // dd($userId);
        // $cartItemCount = Cart::all();
        // //$cartItemCount = Cart::where('user_id', $userId)->count();
        // //dd($cartItemCount);
        // view()->share('cartItemCount', $cartItemCount);
    }
}
