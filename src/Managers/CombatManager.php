<?php namespace Managers;

use Managers\Interfaces\CombatManager as CombatManagerInterface;
use Killable;
use Unit;

class CombatManager implements CombatManagerInterface
{

    function attack(Unit $attacker, Killable $target)
    {
        return "Attacker attacks target";
    }

}
