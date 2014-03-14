<?php

namespace spec\Managers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Units\Unit;
use Killable;

class CombatManagerSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Managers\CombatManager');
    }

    function it_is_a_combat_manager()
    {
        $this->shouldImplement('Managers\Interfaces\CombatManager');
    }

    function it_manages_combat(Unit $attacker, Killable $target)
    {
        $target->takeDamage(10)->shouldBeCalled();

        // when
        $attacker->getDamage()->willReturn(10);
        $target->getHealth()->willReturn(20);

        $this->attack($attacker, $target);
    }
}
