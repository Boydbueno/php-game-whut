<?php

namespace spec\Enemies;

use Items\Interfaces\Wieldable;
use Behaviors\Move\MoveInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZombieSpec extends ObjectBehavior
{
    function let(Wieldable $weapon, MoveInterface $moveInterface)
    {
        $weapon->fire()->willReturn("Slashing with melee"); // Todo: Should not need a weapon
        $moveInterface->move()->willReturn("Moving");

        $this->beConstructedWith($weapon, $moveInterface);
    }

    function it_should_be_an_enemy()
    {
        $this->shouldHaveType('Enemies\Zombie');
        $this->shouldBeAnInstanceOf('Enemies\Enemy');
    }

    function it_should_have_a_max_hp_of_30()
    {
        $this->getMaxHp()->shouldReturn(30);
    }
}
