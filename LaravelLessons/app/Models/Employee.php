<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Employee extends Model
{
    use HasFactory;
    protected $table = "Employee";
    public $timestamps = false;
    protected $fillable = ['name'];

    public function TestAnimals()
    {
        return $this->belongsToMany(Animal::class,
            'Supervisor', 'Employee_id', 'animals_id');
    }

}
