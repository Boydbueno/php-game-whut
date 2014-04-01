<?php namespace Items\Decorators;

use Items\Interfaces\Wieldable;

abstract class WeaponDecorator implements Wieldable
{

    protected $wieldable;
    protected $bonusDamage;

    public function __construct(Wieldable $wieldable)
    {
        $this->wieldable = $wieldable;
    }

    public function getDamage()
    {
        return $this->getBonusDamage() + $this->wieldable->getDamage();
    }

    public function getDamageType()
    {
        return $this->damageType;
    }

    public function getBonusDamage()
    {
        return $this->bonusDamage;
    }
}
