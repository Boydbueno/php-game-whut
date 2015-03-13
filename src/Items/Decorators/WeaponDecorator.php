<?php namespace Items\Decorators;

use Items\Interfaces\Wieldable;

abstract class WeaponDecorator implements Wieldable
{

    /**
     * @var Wieldable The wieldable we're decorating
     */
    protected $wieldable;

    /**
     * @var integer
     */
    protected $bonusDamage;

    /**
     * @var integer
     */
    protected $damageType;

    /**
     * @param Wieldable $wieldable
     */
    public function __construct(Wieldable $wieldable)
    {
        $this->wieldable = $wieldable;
    }

    public function getType()
    {
        return $this->wieldable->getType();
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getDamage()
    {
        return $this->getBonusDamage() + $this->wieldable->getDamage();
    }

    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    /**
     * @return int
     */
    public function getBonusDamage()
    {
        return $this->bonusDamage;
    }

}
