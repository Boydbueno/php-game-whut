<?php namespace Items\Weapons;

use Items\Interfaces\Wieldable;

abstract class Weapon implements Wieldable
{
    protected $damage;

    public function getDamage()
    {
        return $this->damage;
    }
}
