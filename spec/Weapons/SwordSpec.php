<?php

namespace spec\Weapons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SwordSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Weapons\Sword');
        $this->shouldBeAnInstanceOf('Weapons\Weapon');
        $this->shouldImplement('Weapons\Interfaces\Wieldable');
        $this->shouldImplement('Weapons\Interfaces\DamageDealable');
    }

    function it_can_slash()
    {
    	$this->fire()->shouldEqual("Slashing with sword");
    }

    function it_has_a_damage_number_of_10()
    {
        $this->getDamage()->shouldEqual(10);
    }
}
