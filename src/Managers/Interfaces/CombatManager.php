<?php namespace Managers\Interfaces;

use Killable;
use Units\Unit;

interface CombatManager
{
    function attack(Unit $attacker, Killable $target);
}
