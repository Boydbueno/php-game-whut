<?php namespace Managers\Interfaces;

use Interfaces\Actable;
use Killable;

interface CombatManager
{

    /**
     * @param Actable $attacker
     * @param Killable $target
     */
    function attack(Actable $attacker, Killable $target);

}
