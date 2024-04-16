<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Food_animal extends Model
{
    use HasFactory;

    public mixed $animal_id;
    protected $table = "Food_animal";
    protected $fillable = ['animal_feed_id', 'animal_id'];
    public $timestamps = false;


}
