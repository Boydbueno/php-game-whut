<?php

namespace spec\Weapons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AxeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Items\Weapons\Axe');
        $this->shouldBeAnInstanceOf('Items\Weapons\Weapon');
        $this->shouldImplement('Items\Weapons\Interfaces\Wieldable');
        $this->shouldImplement('Items\Weapons\Interfaces\DamageDealable');
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
