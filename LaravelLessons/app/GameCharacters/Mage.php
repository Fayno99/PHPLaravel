<?php
namespace App\GameCharacters;

class Mage extends Hero                           // Клас Маг
{
    public function __construct(string $name, float|int $health, float|int $stamina, \App\GameWeapon\Weapon $weapon)
    {
        parent::__construct($name, $health+15, $stamina+30, $weapon);
    }
}
