<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function aboutUsShow()
    {
        return view('aboutus');
    }

    public function feedbackShow()
    {
        return view('feedback');
    }
    public function resDropDown()
    {
        $restaurant = Restaurants::getRestaurants();
        return view('layouts/app', compact('restaurant'));
    }
}