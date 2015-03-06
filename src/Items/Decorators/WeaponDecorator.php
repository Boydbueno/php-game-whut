<?php namespace Items\Decorators;

use Items\Interfaces\Wieldable;

abstract class WeaponDecorator implements Wieldable
{

    protected $wieldable;
    protected $bonusDamage;
    protected $damageType;

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
        return array_merge($this->damageType, $this->wieldable->getDamageType());
    }

    public function getBonusDamage()
    {
        return $this->bonusDamage;
    }

}
