<?php

namespace spec\Races;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OrcSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Races\Orc');
    }

    function it_is_a_race()
    {
        $this->shouldImplement('Races\Race');
    }

    function it_is_named_as_orc()
    {
        $this->getName()->shouldEqual('Orc');
    }

    function it_has_intelligence_penalty()
    {
        $this->getIntelligence()->shouldEqual(-2);
    }

    function it_has_strength_bonus()
    {
        $this->getStrength()->shouldEqual(2);
    }
}
