<?php

namespace Database\Seeders;

use App\Models\Food_animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Food_animalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Food_animal::factory(50)->create();
    }
}
