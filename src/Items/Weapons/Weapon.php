<?php namespace Items\Weapons;

use Items\Interfaces\Wieldable;
use Items\Interfaces\DamageDealable;

abstract class Weapon implements Wieldable, DamageDealable
{
    protected $damage;

    public function getDamage() {
    	return $this->damage;
    }

    public function fire() {
    	return "Fire the weapon, swing it or whatever";
    }
}
