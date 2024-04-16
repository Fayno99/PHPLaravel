<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/Animals');
});

Route::get('/dz26', function () {
    return view('navbar');
});


Route::get('/AnimalFood', function () {
    return view('animalFood');
});

Route::get('/laravel', function () {
    return ('Test message Laravel');
});


Route::get('/Animals', [
        \App\Http\Controllers\AnimalController::class, 'showAllAnimal']

);

Route::get('/Food', [
        \App\Http\Controllers\AnimalController::class, 'showFood']

);

Route::get('/Employer', [
        \App\Http\Controllers\AnimalController::class, 'showEmployer']

);

Route::get('/Supervisors', [
        \App\Http\Controllers\EmployeeController::class, 'showSupervis']

);


Route::get('/Animals/{animal}', [
        \App\Http\Controllers\AnimalController::class, 'showAnimalFoodData'
    ]
)->name('animal.dataKeyFoods');



Route::get('/Supervisors/{employee}', [
        \App\Http\Controllers\EmployeeController::class, 'SupervisorTest'
    ]
) ->name('employee.dataEmployee'
);


Route::get('/Animals/{animal}', [
        \App\Http\Controllers\AnimalController::class, 'AnimalFoodTest']

)->name('animal.dataKeyFoods');

