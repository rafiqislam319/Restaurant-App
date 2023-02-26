<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $allFoods = Food::all();
        return view('home', compact('allFoods'));
    }
    public function redirects()
    {
        $allFoods = Food::all();
        $userType = Auth::user()->user_type;
        if ($userType == '1') {
            return view('admin.adminHome');
        } else {
            return view('home', compact('allFoods'));
        }
    }
}
