<?php

namespace spec\Enemies;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Items\Interfaces\Wieldable;
use Behaviors\Move\MoveInterface;

class SkeletonArcherSpec extends ObjectBehavior
{

	function let(Wieldable $weapon, MoveInterface $moveInterface)
	{
		$weapon->fire()->willReturn("Shooting arrow");
		$moveInterface->move()->willReturn("Moving!");

		$this->beConstructedWith($weapon, $moveInterface);
	}

    function it_should_be_an_enemy()
    {
        $this->shouldHaveType('Enemies\SkeletonArcher');
        $this->shouldBeAnInstanceOf('Enemies\EnemyAbstract');
    }

    function it_should_have_max_hp_of_20()
    {
    	$this->getMaxHp()->shouldEqual(20);
    }

}
