<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class foodController extends Controller
{
    public function showAllFood (Request $request)
    {
        $food = \App\Models\food::all();
        //  dd($animal->toArray());

        return view('animals',['foodList'=>$food]);
    }
}
