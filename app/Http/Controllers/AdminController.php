<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        if ($user->delete()) {
            Alert::warning('Warning Title', 'User Delete Successfully');
            return redirect()->back();
        }
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

        if ($food->save()) {
            Alert::success('Success', 'Food Saved Successfully');
            return redirect()->back();
        }
    }

    public function allFood()
    {
        //return 1;
        $allFood = Food::all();
        return view('admin.food.foodlist', compact('allFood'));
    }

    public function updateform($id)
    {
        $food = Food::find($id);
        return view('admin.food.updateFood', compact('food'));
    }

    public function deleteFood($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        Alert::success('Success', 'Food Deleted Successfully');
        return redirect()->back();
    }

    public function updateFood(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $food->image = $new_name;
        }

        $food->title = $request->title;
        $food->price = $request->price;
        $food->description = $request->description;
        //return response()->json($food);

        $food->save();

        Alert::success('Success', 'Food Updated Successfully');
        return redirect()->back();
    }

    //reservation 
    public function reservation(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'guest' => 'required|integer|min:1',
            'date' => 'required|date',
            'time' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        // Create a new Reservation instance and populate it with the validated data
        $reservation = new Reservation();
        $reservation->name = $validatedData['name'];
        $reservation->email = $validatedData['email'];
        $reservation->phone = $validatedData['phone'];
        $reservation->guest = $validatedData['guest'];
        $reservation->date = $validatedData['date'];
        $reservation->time = $validatedData['time'];
        $reservation->message = $validatedData['message'];

        // Save the new Reservation instance to the database
        $reservation->save();

        return redirect()->back()->with('success', 'Reservation created successfully!');
    }
    public function viewReservation(){
        $reservations = Reservation::all();
        return view('admin.reservation.viewReservation', compact('reservations'));
    }
}
