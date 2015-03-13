<?php

namespace spec\Items\Factories\Weapons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AxeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Items\Factories\Weapons\Axe');
    }

    function it_can_created_an_axe()
    {
        $axe = $this->create('normal');
        $axe->getType()->shouldEqual('axe');
        $axe->getDamage()->shouldEqual(14);

        $holyAxe = $this->create('rare');
        $holyAxe->getType()->shouldEqual('axe');
        $holyAxe->getDamage()->shouldEqual(17);

        $holyAxe = $this->create('epic');
        $holyAxe->getType()->shouldEqual('axe');
        $holyAxe->getDamage()->shouldEqual(21);
    }
}