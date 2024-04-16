<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\Food;
use App\Models\Food_animal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food_animalTableTest extends TestCase
{
    /**
     * A basic feature test example.
     */
public function test_Food_animal_table__data_end_structure(): void
{ (
    $animal = new Animal([
        'name'=> 'Homik'
    ])
        )->save();

    $food_animal= Food_animal::create([
        'animal_id' => $animal->id,
        'animal_feed_id' => mt_rand(1,44),
    ]);

    $animal->refresh();

    $this->assertModelExists($food_animal);
    $this->assertArrayHasKey('animal_id', $food_animal->toArray());
    $this->assertArrayHasKey('animal_feed_id', $food_animal->toArray());

    $this->assertNotEmpty($animal->id);
    $dataAnimal = $animal->toArray();

    $this->assertIsArray($dataAnimal);
    $this->assertArrayHasKey('name', $dataAnimal);
    $this->assertArrayHasKey('id', $dataAnimal);
    $this->assertIsString($dataAnimal['name']);
    $this->assertIsNotString($dataAnimal['id']);

    foreach ($animal->dataKeyFoods as $food_animal) {
        $food_animals[] = $food_animal->animal_feed;
       //dd( $animal->name, $food_animals);
    }
}
}
