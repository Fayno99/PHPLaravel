<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
  public function showAllAnimal(Request $request)
  {
      $animal = \App\Models\Animal::all();
      $supervisor = \App\Models\Supervisor::all();


      //  dd($animal->toArray());

      return view('animals',['animalList'=>$animal,'supervisorList'=>$supervisor]  );
  }

  public function showFood(Request $request)
  {
      $food = \App\Models\Food::all();

      return view('Food', ['foodList'=>$food]);
  }

    public function showEmployer(Request $request)
    {
        $employer = \App\Models\Employee::all();

        return view('Employe', ['employerList'=>$employer]);
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

    public function AnimalFoodTest(Request $request, $id)
    {
        $animal = \App\Models\Animal::find($id);
        $foods = [];
        foreach ($animal->dataKeyFoods as $food) {
            $foods[] = $food->animal_feed;
        }

        return view('animalFood', [ 'Animal'=>$animal,'foods' => $foods]);

    }
}


