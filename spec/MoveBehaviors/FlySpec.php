<?php

namespace spec\MoveBehaviors;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FlySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MoveBehaviors\Fly');
    }

    function it_should_fly_when_moving()
    {
    	$this->move()->shouldEqual('Flying');
    }
}
