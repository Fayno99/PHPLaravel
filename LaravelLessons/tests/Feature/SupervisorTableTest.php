<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\Employee;
use App\Models\Food_animal;
use App\Models\Supervisor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SupervisorTableTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Supervisor_Table_table__data_end_structure(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);

        {
            (
            $employee = new Employee([
                'name' => fake()->name
            ])
            )->save();

            $supervisor = Supervisor::create([
                'employee_id' => $employee->id,
                'animals_id' => mt_rand(1, 30),
            ]);

            $employee->refresh();

            $this->assertModelExists($supervisor);
            $this->assertArrayHasKey('animals_id', $supervisor->toArray());
            $this->assertArrayHasKey('employee_id', $supervisor->toArray());

            $this->assertNotEmpty($employee->id);
            $this->assertNotEmpty($employee->name);

            $this->assertNotEmpty($supervisor->animals_id);
            $this->assertNotEmpty($supervisor->employee_id);

            $dataEmployee = $employee->toArray();

            $this->assertIsArray($dataEmployee);

            $this->assertArrayHasKey('name', $dataEmployee);
            $this->assertArrayHasKey('id', $dataEmployee);

            $this->assertIsString($dataEmployee['name']);
            $this->assertIsInt($supervisor['employee_id']);
            $this->assertIsInt($supervisor['animals_id']);

            foreach ($employee->TestAnimals as $supervisor) {
                $supervisors[] = $supervisor->name;
               // dd( $employee->name, $supervisors);
            }

            $export =  $supervisor ->export();
            // dd($export);

            $this->assertIsArray($export);
            $this->assertArrayHasKey('animal', $export);
            $this->assertArrayHasKey('foods', $export);
            $this->assertIsNotObject($export);
            $this->assertNotEmpty($export);
            $this->assertIsString($export['animal']);
            $this->assertIsArray($export['foods']);

            $exportEmploye =  $supervisor ->exportAnimalEmploye();
            //  dd($exportEmploye);
            $this->assertIsArray($exportEmploye);
            $this->assertArrayHasKey('animal', $exportEmploye);
            $this->assertArrayHasKey('supervisors', $exportEmploye);
            $this->assertIsNotObject($exportEmploye);
            $this->assertNotEmpty($exportEmploye);
            $this->assertIsString($exportEmploye['animal']);
            $this->assertIsArray($exportEmploye['supervisors']);

            $exportEmployeAnimal =  $supervisor ->exportEmployeeAnimal();
           // dd($exportEmployeAnimal);

            $this->assertIsArray($exportEmployeAnimal);
            $this->assertArrayHasKey('animal', $exportEmployeAnimal);
            $this->assertArrayHasKey('supervisors', $exportEmployeAnimal);
            $this->assertIsNotObject($exportEmployeAnimal);
            $this->assertNotEmpty($exportEmployeAnimal);
            $this->assertIsString($exportEmployeAnimal['supervisors']);
            $this->assertIsArray($exportEmployeAnimal['animal']);
        }
    }
}
