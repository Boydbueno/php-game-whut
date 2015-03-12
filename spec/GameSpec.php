<?php namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameSpec extends ObjectBehavior
{
    function let(\SplSubject $turnManager)
    {
        $this->beConstructedWith($turnManager);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Game');
    }
}
