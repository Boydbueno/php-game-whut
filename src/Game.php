<?php

use Managers\Interfaces\CombatManager;
use Interfaces\Actable;


class Game
{

    private $combatManager;

    public function __construct(CombatManager $combatManager)
    {
        $this->combatManager = $combatManager;
    }

    public function attack(Actable $unit, Killable $target)
    {
        $this->combatManager->attack($unit, $target);
    }
}
