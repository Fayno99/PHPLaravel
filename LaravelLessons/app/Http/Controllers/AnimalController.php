<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
  public function showAllAnimal(Request $request)
  {
      $animal = \App\Models\Animal::all();
      $supervisor = \App\Models\supervisor::all();
      $food = \App\Models\food::all();
      $employer = \App\Models\employee::all();
      //  dd($animal->toArray());

      return view('animals',['animalList'=>$animal,'supervisorList'=>$supervisor,'foodList'=>$food, 'employerList'=>$employer]  );
  }

  public function showAnimalFoodData(Request $request, \App\Models\Animal $animal)
  {
     $dataAnimalFood = $animal->dataFood;
      //dd($dataAnimalFood->toArray());
      return view('animalFood',
          [
              'Animal'=>$animal,
              'animalFood'=>$dataAnimalFood
          ]);
  }


}


