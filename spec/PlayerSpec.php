<?php

namespace spec;

use Jobs\Job;
use Managers\CombatManager;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Races\Race;
use Stats\Stats;

class PlayerSpec extends ObjectBehavior
{
    function let(Stats $stats, Race $race, Job $job, CombatManager $combatManager)
    {
        $this->beConstructedWith($stats, $race, $job, $combatManager);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Player');
    }

    function it_is_a_unit()
    {
        $this->shouldBeAnInstanceOf('Units\Unit');
    }

    function it_is_controllable()
    {
        $this->shouldImplement('Interfaces\Controllable');
    }
}
