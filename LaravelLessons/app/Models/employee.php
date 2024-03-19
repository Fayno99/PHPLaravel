<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = "Employee";


    public function dataEmployee()
    {
        return $this->hasMany(supervisor::class);
    }

}
