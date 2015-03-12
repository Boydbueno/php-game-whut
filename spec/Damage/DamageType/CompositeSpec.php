<?php

namespace spec\Damage\DamageType;

use Damage\DamageType\DamageType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CompositeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Damage\DamageType\Composite');
    }

    function it_is_a_damage_type()
    {
        $this->shouldImplement('Damage\DamageType\DamageType');
    }

    function it_has_a_description()
    {
        $this->getDescription()->shouldBeString();
    }

    function it_can_contain_multiple_damage_types(DamageType $damageType1, DamageType $damageType2)
    {
        $damageType1->getDescription()->willReturn('Fire!');
        $damageType2->getDescription()->willReturn('Holy!');

        $this->add($damageType1);
        $this->add($damageType2);
        $this->getDescription()->shouldEqual("Fire!Holy!");

        $this->remove($damageType2);
        $this->getDescription()->shouldEqual("Fire!");
    }
}
