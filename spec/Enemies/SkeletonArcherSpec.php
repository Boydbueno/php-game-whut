<?php

namespace spec\Enemies;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Items\Weapons\Weapon;
use Behaviors\Move\MoveInterface;

class SkeletonArcherSpec extends ObjectBehavior
{

	function let(Weapon $weapon, MoveInterface $moveInterface)
	{
        $weapon->getDamage()->willReturn(10);
		$moveInterface->move()->willReturn("Moving!");

		$this->beConstructedWith($weapon, $moveInterface);
	}

    function it_should_be_an_enemy()
    {
        $this->shouldHaveType('Enemies\SkeletonArcher');
        $this->shouldBeAnInstanceOf('Enemies\Enemy');
    }

    function it_should_have_max_hp_of_20()
    {
    	$this->getMaxHp()->shouldEqual(20);
    }

    function it_should_have_15_dexterity()
    {
        $this->getDexterity()->shouldEqual(15);
    }

}
