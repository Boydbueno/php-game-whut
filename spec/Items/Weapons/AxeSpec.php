<?php namespace spec\Items\Weapons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AxeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Items\Weapons\Axe');
    }

    function it_is_a_weapon()
    {
        $this->shouldBeAnInstanceOf('Items\Weapons\Weapon');
    }

    function it_has_a_damage_number_of_14()
    {
    	$this->getDamage()->shouldEqual(14);
    }

    function it_does_slashing_and_blunt_damage()
    {
        $this->getDamageType()->shouldHaveValue('slashing');
        $this->getDamageType()->shouldHaveValue('blunt');
    }

    public function getMatchers()
    {
        return [
            'haveValue' => function($subject, $value) {
                return in_array($value, $subject);
            }
        ];
    }
}
