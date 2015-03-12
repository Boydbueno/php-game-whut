<?php

namespace Damage;

class Damage
{

    private $damage = 0;

    public function __construct($number)
    {
        $this->damage = $number;
    }

    public function getDamage()
    {
        return $this->damage;
    }
}
