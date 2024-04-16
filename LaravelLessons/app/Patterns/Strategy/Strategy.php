<?php


// app/Patterns/Strategy/WarriorStrategy.php
namespace App\Patterns\Strategy;


class Strategy {
    public function createWarrior(): \App\GameCharacters\Warrior
    {
        return new \App\GameCharacters\Warrior('Warrior', 300, 120, new \App\GameWeapon\Sword());
    }
}
