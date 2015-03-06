<?php

namespace spec\Damage\DamageType;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HolySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Damage\DamageType\Holy');
    }

    function it_is_a_damage_type()
    {
        $this->beAnInstanceOf('Damage\DamageType\DamageType');
    }

    function it_has_a_description()
    {
        $this->getDescription()->shouldEqual('Tempus, guide me!');
    }
}
