<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "Supervisor";
    protected $fillable = ['employee_id', 'animals_id'];

}
