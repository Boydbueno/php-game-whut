<?php

namespace spec\Races;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ElfSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Races\Elf');
    }

    function it_is_a_race()
    {
        $this->shouldImplement('Races\Race');
    }

    function it_is_named_as_elf()
    {
        $this->getName()->shouldEqual('Elf');
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
