<?php

namespace spec\Stats;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StatsSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith([
            'str' => 11
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Stats\Stats');
    }

    function it_should_contain_strength()
    {
        $this->getStrength()->shouldBeInteger();
    }

    function it_should_contain_stamina()
    {
        $this->getStamina()->shouldBeInteger();
    }

    function it_should_contain_dexterity()
    {
        $this->getDexterity()->shouldBeInteger();
    }

    function it_should_contain_intelligence()
    {
        $this->getIntelligence()->shouldBeInteger();
    }

    function it_should_contain_wisdom()
    {
        $this->getWisdom()->shouldBeInteger();
    }

    function it_should_use_array_passed_in_constructor()
    {
        $this->getStrength()->shouldEqual(11);
    }

    function it_will_add_missing_stats_automatically()
    {
        $this->getWisdom()->shouldEqual(0);
    }
}
