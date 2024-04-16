<?php

namespace Tests\Feature;

use App\Models\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnimalTableTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_animal_add_data(): void
    {
      //  $animal = Animal::factory()->create();
        (
         $animal =   new Animal ([
            "name" => 'Funtik',
        ])
        )->save();
  $this->assertFalse(false);

//  $this->assertDatabaseCount('Animals', 64);
  $this->assertDatabaseHas('Animals', ['name' => 'Funtik']);
  $this->assertArrayHasKey('name',$animal->toArray());

  $this->assertNotEmpty($animal->name);


  $AnimalData = Animal::create ([
      "name" => 'Pony'
  ]);

  //dd($AnimalData->toArray());

    }
}

