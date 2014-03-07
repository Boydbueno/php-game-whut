<?php

namespace spec\Stats;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DexteritySpec extends ObjectBehavior
{
    function it_is_a_stat()
    {
        $this->shouldHaveType('Stats\Dexterity');
        $this->shouldBeAnInstanceOf('Stats\Stat');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldEqual('Dexterity');
    }

    function it_should_have_an_acronym()
    {
        $this->getAcronym()->shouldEqual('dex');
    }

    function it_should_have_a_value()
    {
        $this->get()->shouldEqual(0);
        $this->set(12);
        $this->get()->shouldEqual(12);
    }

    function it_should_not_allow_string_as_value()
    {
        $this->shouldThrow('Stats\Exceptions\ShouldBeIntException')->duringSet('pizza');
    }
}
