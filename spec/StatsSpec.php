<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StatsSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith([
            'str' => 11,
            'con' => 13,
            'dex' => 15,
            'int' => 10,
            'wis' => 12
        ]); // Note: No real error
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Stats');
    }

    function it_should_contain_strength()
    {
        $this->getStrength()->shouldEqual(11);
    }

    function it_should_contain_dexterity()
    {
        $this->getDexterity()->shouldEqual(15);
    }
}
