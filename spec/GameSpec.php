<?php namespace spec;

use Managers\Interfaces\CombatManager;
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
