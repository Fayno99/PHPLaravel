<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Food_animal;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food_animal>
 */
class Food_animalFactory extends Factory
{
    protected $model = Food_animal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'animal_feed_id'=>mt_rand(1,44),
            'animal_id'=>mt_rand(1,52),
        ];
    }
}
