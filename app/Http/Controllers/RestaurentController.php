<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurentController extends Controller
{
    public function index($resID, $resName)
    {
        // Read value from Model method
        // Pass to view
        $foods = [];
        $mName = '';
        $menus = DB::table('menu')->where('ResID', $resID)->get();
        foreach ($menus as $menu) {
            $foods[$menu->name] = DB::table('food')->where('menuID', $menu->id)->get();
        }
        return view('restaurant', compact('resID', 'resName', 'menu', 'foods'));
    }
    public function show($resID)
    {

        // $submission = Submission::where('id', $id)
        // ->with('form')
        //     ->firstOrFail();
    }
}