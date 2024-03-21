<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function requestTest (Request $request)
    {
       $animal = Animal::all();
        dd($animal->toArray());
       // return "test";
    }
}


