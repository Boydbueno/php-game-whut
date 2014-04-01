<?php namespace spec\Items\Weapons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MaceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Items\Weapons\Mace');
    }

    function it_is_a_weapon()
    {
        $this->shouldBeAnInstanceOf('Items\Weapons\Weapon');
    }

    function it_has_a_damage_number_of_12()
    {
        $this->getDamage()->shouldEqual(12);
    }

    function it_does_blunt_damage()
    {
        $this->getDamageType()->shouldEqual(['blunt']);
    }

    function it_can_stun()
    {
        // FIXME
        // $this->getStatusEffects()->shouldEqual(['stun']);
    }

}
