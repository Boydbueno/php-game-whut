<?php namespace spec\Items\Decorators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Items\Weapons\Weapon;

class HolySpec extends ObjectBehavior
{

    function let(Weapon $weapon)
    {
        // Mock a weapon with 10 damage
        $weapon->getDamage()->willReturn(10);
        $weapon->getDamageType()->willReturn(['blunt']);

        $this->beConstructedWith($weapon);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Items\Decorators\Holy');
    }

    function it_should_increase_the_damage_of_the_weapon()
    {
        $this->getDamage()->shouldEqual(14);
    }

    function it_should_add_holy_to_the_weapon()
    {
        $this->getDamageType()->shouldHaveValue('holy');
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
