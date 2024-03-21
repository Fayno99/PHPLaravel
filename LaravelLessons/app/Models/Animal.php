<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Animal extends Model
{
  protected $table = "Animals";

  public function dataFood()
{
    return $this->hasMany(Food_animal::class);
}

public function dataKeyFoods()
{
return $this->belongsToMany(Food::class,
    'Food_animal', 'animal_id','animal_feed_id');
}

    public function employe()
    {
        return $this->belongsToMany(Employee::class,
            'Supervisor', 'animals_id', 'Employee_id');
    }

}
