<?php

namespace spec\Managers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Interfaces\Actable;

class TurnManagerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Managers\TurnManager');
    }

    function it_stores_a_collection_of_actables(Actable $actable1, Actable $actable2)
    {
        $this->attach($actable1);
        $this->getObservers()->shouldHaveCount(1);
        $this->attach($actable2);
        $this->getObservers()->shouldHaveCount(2);

        $this->detach($actable2);
        $this->getObservers()->shouldHaveCount(1);
    }

    function it_can_notify_its_observers_to_update(Actable $actable1, Actable $actable2)
    {
        $actable1->update($this)->shouldBeCalled();
        $actable2->update($this)->shouldBeCalled();

        $this->attach($actable1);
        $this->attach($actable2);

        // when
        $this->notify();
    }
}
