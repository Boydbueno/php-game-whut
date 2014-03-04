<?php

namespace spec\Enemies;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Weapons\Interfaces\Wieldable;
use MoveBehaviors\MoveBehavior;

class ConcreteEnemySpec extends ObjectBehavior
{
	function let(Wieldable $weapon, MoveBehavior $moveBehavior)
	{
		$weapon->fire()->willReturn("Shooting");
		$moveBehavior->move()->willReturn("Moving");

		$this->beConstructedWith($weapon, $moveBehavior);
	}

    function it_should_be_an_enemy()
    {
        $this->shouldHaveType('Enemies\ConcreteEnemy');
        $this->shouldImplement('Shootable');
        $this->shouldImplement('Moveable');
    }

    function it_can_shoot()
    {
    	$this->shoot()->shouldEqual("Shooting");
    }

    function it_can_move()
    {
        $this->move()->shouldEqual("Moving");
    }

    function it_has_hp()
    {
        $this->setHp(20);
        $this->getHp()->shouldEqual(20);
    }

    function it_can_swap_weapon(Wieldable $weapon)
    {
        $weapon->fire()->willReturn("Firing other weapon");
        $this->setWeapon($weapon);
        
        $this->shoot()->shouldEqual("Firing other weapon");
    }

    function it_can_swap_movement_behavior(MoveBehavior $moveBehavior)
    {
        $moveBehavior->move()->willReturn("Some other movement behavior");
        $this->setMoveBehavior($moveBehavior);

        $this->move()->shouldEqual("Some other movement behavior");
    }
}
