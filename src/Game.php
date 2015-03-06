<?php

use Managers\Interfaces\CombatManager;
use SplSubject as TurnManager;
use Interfaces\Actable;


class Game
{

    private $combatManager;
    private $turnManager;

    /**
     * @param CombatManager $combatManager
     * @param SplSubject    $turnManager
     */
    public function __construct(CombatManager $combatManager, TurnManager $turnManager)
    {
        $this->combatManager = $combatManager;
        $this->turnManager = $turnManager;
    }

    /**
     * @param Actable  $unit
     * @param Killable $target
     */
    public function attack(Actable $unit, Killable $target)
    {
        $this->combatManager->attack($unit, $target);
    }

    public function turn($time)
    {
        // TODO: Implement
    }
}
