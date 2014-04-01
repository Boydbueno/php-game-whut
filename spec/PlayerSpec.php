<?php

namespace spec;

use Jobs\Job;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Races\Race;
use Stats\Stats;
use Game;

class PlayerSpec extends ObjectBehavior
{
    function let(Game $game, Stats $stats, Race $race, Job $job)
    {
        $this->beConstructedWith($game, $stats, $race, $job);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Player');
    }

    function it_is_a_unit()
    {
        $this->shouldBeAnInstanceOf('Units\Unit');
    }
}
