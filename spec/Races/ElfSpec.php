<?php

namespace spec\Races;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Stats\Stats;

class ElfSpec extends ObjectBehavior
{

    function let(Stats $stats)
    {
        $stats->getStrength()->willReturn(0);
        $stats->getStamina()->willReturn(-2);
        $stats->getDexterity()->willReturn(2);
        $stats->getIntelligence()->willReturn(0);
        $stats->getWisdom()->willReturn(0);

        $this->beConstructedWith($stats);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Races\Elf');
    }

    function it_has_stamina_penalty()
    {
        $this->getStamina()->shouldEqual(-2);
    }

    function it_has_dexterity_bonus()
    {
        $this->getDexterity()->shouldEqual(2);
    }
}
