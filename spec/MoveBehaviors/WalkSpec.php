<?php

namespace spec\MoveBehaviors;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WalkSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MoveBehaviors\Walk');
    }

    function it_should_walk_when_moving()
    {
    	$this->move()->shouldEqual('Walking');
    }
}
