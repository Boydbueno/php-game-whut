<?php

namespace spec\Stats;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StatsSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith([
            'str' => 11,
            'sta' => 13,
            'dex' => 15,
            'int' => 10,
            'wis' => 12
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Stats\Stats');
    }

    function it_should_contain_strength()
    {
        $this->getStrength()->shouldEqual(11);
    }

    function it_should_contain_stamina()
    {
        $this->getStamina()->shouldEqual(13);
    }

    function it_should_contain_dexterity()
    {
        $this->getDexterity()->shouldEqual(15);
    }

    function it_should_contain_intelligence()
    {
        $this->getIntelligence()->shouldEqual(10);
    }

    function it_should_contain_wisdom()
    {
        $this->getWisdom()->shouldEqual(12);
    }
}
