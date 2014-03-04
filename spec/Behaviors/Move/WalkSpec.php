<?php

namespace spec\Behaviors\Move;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WalkSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Behaviors\Move\Walk');
    }

    function it_should_walk_when_moving()
    {
    	$this->move()->shouldEqual('Walking');
    }
}