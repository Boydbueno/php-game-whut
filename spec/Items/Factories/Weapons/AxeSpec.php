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
        $axe = $this->create('hand axe');
        $axe->getType()->shouldEqual('axe');
        $axe->getName()->shouldEqual('hand axe');
        $axe->getDamage()->shouldEqual(14);

        $axe = $this->create('battle axe');
        $axe->getType()->shouldEqual('axe');
        $axe->getName()->shouldEqual('battle axe');
        $axe->getDamage()->shouldEqual(17);

        $axe = $this->create('golem axe');
        $axe->getType()->shouldEqual('axe');
        $axe->getName()->shouldEqual('golem axe');
        $axe->getDamage()->shouldEqual(21);
    }
}
