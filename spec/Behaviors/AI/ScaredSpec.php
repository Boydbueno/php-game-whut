<?php

namespace spec\Behaviors\AI;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ScaredSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Behaviors\AI\Scared');
        $this->shouldImplement('Behaviors\AI\AIInterface');
    }
}