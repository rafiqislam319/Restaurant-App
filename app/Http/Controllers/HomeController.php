<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //$allFoods = Food::all();   //I have used FoodServiceProvider class for displaying foods in frontend
        return view('home');
    }
    public function redirects()
    {
        //$allFoods = Food::all();
        $userType = Auth::user()->user_type;
        if ($userType == '1') {
            return view('admin.adminHome');
        } else {

            $userId = Auth::id();
            $count = Cart::where('user_id', $userId)->count();

            return view('home', compact('count'));
        }
    }

    public function addtoCart(Request $request, $id)
    {

        if (Auth::id()) {
            $userId = Auth::id();

            $foo_id = $id;

            $cart = new Cart();
            $cart->quantity = $request->quantity;
            $cart->user_id = $userId;
            $cart->food_id = $foo_id;
            //dd($cart);
            $cart->save();


            return redirect()->back();
        } else {

            return redirect('/login');
        }
    }
    public function showCart(Request $request, $id)
    {
        return view('frontend.cart');
    }
}
