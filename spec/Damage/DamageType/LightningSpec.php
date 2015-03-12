<?php

namespace spec\Damage\DamageType;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LightningSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Damage\DamageType\Lightning');
    }

    function it_is_a_damage_type()
    {
        $this->shouldImplement('Damage\DamageType\DamageType');
    }

    function it_has_a_description()
    {
        $this->getDescription()->shouldBeString();
    }
}
