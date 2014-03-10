<?php

namespace spec\Behaviors\AI;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AggressiveSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Behaviors\AI\Aggressive');
    }

    function it_should_be_an_AI_behavior()
    {
        $this->shouldImplement('Behaviors\AI\Interfaces\IAI');
    }

    function it_should_act_aggressively()
    {
        $this->act()->shouldEqual('Do some aggressive action');
    }
}
