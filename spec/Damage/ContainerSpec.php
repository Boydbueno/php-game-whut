<?php

namespace spec\Damage;

use Damage\Damage;
use Damage\DamageType\DamageType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContainerSpec extends ObjectBehavior
{

    function let(DamageType $damageType, Damage $damage)
    {
        $this->beConstructedWith($damageType, $damage);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Damage\Container');
    }

    function it_has_a_damage_type()
    {
        $this->getDamageType()->shouldBeAnInstanceOf('Damage\DamageType\DamageType');
    }

    function it_has_a_damage_number()
    {
        $this->getDamage()->shouldBeAnInstanceOf('Damage\Damage');
    }
}
