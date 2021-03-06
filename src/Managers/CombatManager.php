<?php namespace Managers;

use Managers\Interfaces\CombatManager as CombatManagerInterface;
use Killable;
use Units\Unit;

class CombatManager implements CombatManagerInterface
{

    function attack(Unit $attacker, Killable $target)
    {
        $damage = $attacker->getDamage();
        $target->takeDamage($damage);
    }

}
