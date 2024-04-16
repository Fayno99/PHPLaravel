<?php


// app/Patterns/Factory/HeroFactory.php
namespace App\Patterns\Factory;

class Factory {
    public function createHero($type)
    {
        switch ($type) {
            case 'mage':
                return new \App\GameCharacters\Mage('Mage', 100, 100, new \App\GameWeapon\Bow());
            case 'archer':
                return new \App\GameCharacters\Archer('Archer', 100, 100, new \App\GameWeapon\MagicStaff());
            case 'Dambldor':
                return new \App\GameCharacters\Mage('Dambldor', 100, 100, new \App\GameWeapon\Pistol());


        }
    }
}



