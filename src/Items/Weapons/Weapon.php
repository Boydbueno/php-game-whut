<?php namespace Items\Weapons;

use Items\Interfaces\Wieldable;

abstract class Weapon implements Wieldable
{
    protected $damage;
    protected $damageTypes;
    protected $statusEffects;

    public function getDamage()
    {
        return $this->damage;
    }

    public function getDamageType()
    {
        return $this->damageTypes;
    }

    public function getStatusEffects()
    {
        return $this->statusEffects;
    }
}
