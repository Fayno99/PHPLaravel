<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $table = "Food";

    public function animalFoods()
    {
        return $this->hasMany(food_animal::class);
    }

}
