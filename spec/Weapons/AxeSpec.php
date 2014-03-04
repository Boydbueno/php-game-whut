<?php

namespace spec\Weapons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AxeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Weapons\Axe');
        $this->shouldBeAnInstanceOf('Weapons\Weapon');
        $this->shouldImplement('Weapons\Interfaces\Wieldable');
        $this->shouldImplement('Weapons\Interfaces\DamageDealable');
    }

    function it_can_chop()
    {
    	$this->fire()->shouldEqual('Chopping with axe');
    }

    function it_has_a_damage_number_of_14()
    {
    	$this->getDamage()->shouldEqual(14);
    }
}
