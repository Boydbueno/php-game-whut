<?php

namespace spec\Stats;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WisdomSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(10);
    }

    function it_is_a_stat()
    {
        $this->shouldHaveType('Stats\Wisdom');
        $this->shouldBeAnInstanceOf('Stats\Stat');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldEqual('Wisdom');
    }

    function it_should_have_an_acronym()
    {
        $this->getAcronym()->shouldEqual('wis');
    }

    function it_should_have_a_value()
    {
        $this->get()->shouldEqual(10);
        $this->set(12);
        $this->get()->shouldEqual(12);
    }
}
