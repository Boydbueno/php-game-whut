<?php

namespace spec\Damage;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DamageSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith(10);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Damage\Damage');
    }

    function it_should_have_damage_number()
    {
        $this->getDamage()->shouldBeInteger();
    }
}
