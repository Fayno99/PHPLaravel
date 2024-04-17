<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Food extends Model
{
    protected $table = "Food";
    use HasFactory;
    public $timestamps = false;

    public function animalFoods()
    {
        return $this->hasMany(food_animal::class);
    }

    public function dataKeyAnimal()
    {
        return $this->belongsToMany(Animal::class,
            'Food_animal', 'animal_feed_id', 'animal_id');
    }

    public function export(): array
    {
        $animals = $this->dataKeyAnimal()->pluck('name')->toArray();

        return [
            'animal_feed' => $this->animal_feed,
            'animals' => $animals,
        ];

    }

}
