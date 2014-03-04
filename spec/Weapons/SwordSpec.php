<?php

namespace spec\Weapons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Weapons\Decorators\WeaponDecorator;

class SwordSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Weapons\Sword');
        $this->shouldBeAnInstanceOf('Weapons\Weapon');
        $this->shouldImplement('Weapons\WeaponInterface');
    }

    function it_can_slash()
    {
    	$this->fire()->shouldEqual("Slashing with sword");
    }

    function it_has_a_damage_number()
    {
        $this->getDamage()->shouldEqual(10);
    }
}
