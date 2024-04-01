<?php

namespace App\Patterns\Strategy;

class WarriorCreator
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function createWarrior(): \App\GameCharacters\Warrior
    {
        return $this->strategy->createWarrior();
    }
}
