<?php


namespace App\GameCharacters;

class Archer extends Hero                        // Клас Лучник
{
    public function __construct(string $name, float|int $health, float|int $stamina, \App\GameWeapon\Weapon $weapon)
    {
        parent::__construct($name, $health+50, $stamina+100, $weapon);
    }
}
