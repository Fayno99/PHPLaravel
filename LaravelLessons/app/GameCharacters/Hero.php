<?php
namespace App\GameCharacters;
//namespace App\GameWeapon;

class Hero {
    public $name;
    protected $health;
    protected $stamina;
    protected \App\GameWeapon\Weapon $weapon;

    public function __construct (
        string $name,
        float|int  $health,
        float|int  $stamina,
        \App\GameWeapon\Weapon $weapon
    ) {
        $this->name = $name;
        $this->health = $health;
        $this->stamina = $stamina;
        $this->weapon = $weapon;
    }

   }
