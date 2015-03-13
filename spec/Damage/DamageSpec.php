<?php

namespace spec\Damage;

use Damage\Damage;
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

    function it_is_a_value_object()
    {
        $this->shouldImplement('ValueObject');
    }

    function it_should_have_damage_number()
    {
        $this->get()->shouldBeInteger();
    }

    function it_should_be_the_same_as_other_damage_objects_with_same_value()
    {
        $damage = new Damage(10);
        $this->isEqualTo($damage)->shouldEqual(true);
    }

}
