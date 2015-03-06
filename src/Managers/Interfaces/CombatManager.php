<?php namespace Managers\Interfaces;

use Killable;
use Units\Unit;

interface CombatManager
{

    /**
     * @param Unit     $attacker
     * @param Killable $target
     */
    function attack(Unit $attacker, Killable $target);

}
