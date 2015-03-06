<?php

namespace spec\Damage;

use Damage\DamageType\DamageType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContainerSpec extends ObjectBehavior
{

    function let(DamageType $damageType)
    {
        $this->beConstructedWith($damageType);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Damage\Container');
    }

    function it_has_a_damage_type()
    {
        $this->getDamageType()->shouldBeAnInstanceOf('Damage\DamageType\DamageType');
    }
}
