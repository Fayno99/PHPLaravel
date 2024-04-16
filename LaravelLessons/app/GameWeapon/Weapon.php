<?php

namespace App\GameWeapon;


class Weapon
{
    protected const damage = 0;

    public function getDamage(): int
    {
        return static::damage;
    }
}
