<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
  protected $table = "Animals";

  public function dataFood()
{
    return $this->hasMany(food_animal::class);
}



}
