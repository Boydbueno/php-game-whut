<?php

namespace spec\Items\Decorators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Items\Weapons\Weapon;

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
        $this->shouldHaveType('Items\Decorators\Flaming');
    }

    function it_should_increase_the_damage_of_the_weapon()
    {
    	$this->getDamage()->shouldEqual(13);
    }

}
