<?php namespace Items\Weapons;

use Weapons\Interfaces\Wieldable;
use Weapons\Interfaces\DamageDealable;

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
