<?php namespace Managers\Interfaces;

use Killable;
use Unit;

interface CombatManager {
    function attack(Unit $attacker, Killable $target);
}
