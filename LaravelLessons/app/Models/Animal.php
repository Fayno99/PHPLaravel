<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Animal extends Model
{
    use HasFactory;
  protected $table = "Animals";
  protected $fillable = ['name'];
  public $timestamps = false;

  public function dataFood()
{
    return $this->hasMany(Food_animal::class);
}

public function dataKeyFoods(): BelongsToMany
{
return $this->belongsToMany(Food::class,
    'Food_animal', 'animal_id','animal_feed_id');
}

    public function employe(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class,
            'Supervisor', 'animals_id', 'Employee_id');
    }

    public function export(): array
    {
        $animal_feeds = $this->dataKeyFoods()->pluck('animal_feed')->toArray();

        return [
            'animal' => $this->name,
            'foods' => $animal_feeds,

        ];

    }
    public function exportAnimalEmploye(): array
    {
        $supervisors = $this->employe()->pluck('name')->toArray();

        return [
            'animal' => $this->name,
            'supervisors' => $supervisors,

        ];

    }
    public function TestEmployeeAnimaltAnimal()
    {
        return $this->belongsToMany(Animal::class,
            'Supervisor', 'Employee_id', 'animals_id');
    }
    public function exportEmployeeAnimal(): array
    {
        $animals = $this->TestEmployeeAnimaltAnimal()->pluck('name')->toArray();

        return [
            'supervisors' => $this->name,
            'animal' =>$animals,

        ];

    }


}
