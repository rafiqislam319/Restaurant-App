<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function allUser()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function addFood()
    {
        return view('admin.food.addFood');
    }
    public function storeFood(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $food = new Food();
        $food->title = $request->title;
        $food->price = $request->price;
        $food->image = $new_name;
        $food->description = $request->description;
        $food->save();
        //return response()->json($food);
        return redirect()->back();
        //return redirect()->back()->with('success', 'Food saved successfully');


    }
}
