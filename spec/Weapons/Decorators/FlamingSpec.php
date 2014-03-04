<?php

namespace spec\Weapons\Decorators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Weapons\Decorators\WeaponDecorator;
use Weapons\Weapon;

class FlamingSpec extends ObjectBehavior
{

	function let(Weapon $weapon)
	{
		// Mock a weapon with 10 damage
		$weapon->getDamage()->willReturn(10);

		$this->beConstructedWith($weapon);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Weapons\Decorators\Flaming');
    }

    function it_should_increase_the_damage_of_the_weapon()
    {
    	$this->getDamage()->shouldEqual(13);
    }

}
