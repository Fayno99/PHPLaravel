<?php
namespace App\GameCharacters;

class Warrior extends Hero                          // Клас воїн
{
    public function __construct(string $name ,int $health, int $stamina, \App\GameWeapon\Weapon $weapon)
    {
        parent::__construct($name, $health +23, $stamina-10, $weapon);
    }
}
