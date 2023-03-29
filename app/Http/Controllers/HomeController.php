<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\Order;
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
        //for counting cart data addes by user
        $count = Cart::where('user_id', $id)->count();

        //to remove from cart
        $cart = Cart::select('*')->where('user_id', '=', $id)->get();

        //for getting added cart data's all info
        $cartData = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        //dd($cartData);

        return view('frontend.cart', compact('count', 'cartData', 'cart'));
    }
    public function removeCart($id)
    {
        $data = Cart::where('id', $id);
        $data->delete();
        return redirect()->back();
    }

    public function orderConfirm(Request $request)
    {
        foreach ($request->title as $key => $title) {
            $data = new Order;
            $data->title = $title;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];

            $data->customer_name = $request->customer_name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }
        return redirect()->back();
    }
}
