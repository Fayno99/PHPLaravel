<?php

namespace App\Http\Controllers;

use App\Patterns\Strategy\Strategy;

class PatternController extends Controller
{
    public function index()
    {
        $warriorCreator = new \App\Patterns\Strategy\WarriorCreator (new \App\Patterns\Strategy\Strategy());
        $warrior = $warriorCreator->createWarrior();


        $heroFactory = new \App\Patterns\Factory\Factory();
        $hero = $heroFactory->createHero('mage');
        $hero_1 = $heroFactory->createHero('archer');
        $hero_2 = $heroFactory->createHero('Dambldor');
        // Поверніть результати
        return response()->json(['warrior' => $warrior,'hero_1' => $hero, 'hero-2' => $hero_1, 'hero-3' => $hero_2]);
    }
}

//Основна відмінність між патернами Стратегія та Фабрика полягає в тому,
//що Стратегія використовується для зміни поведінки об’єкта,
//а Фабрика  використовується для створення об’єктів.
//Стратегія визначає, як об’єкт виконує певну дію, тоді як Фабрика визначає, як об’єкт створюється.
