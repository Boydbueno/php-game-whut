<?php namespace Items\Decorators;

use Items\Interfaces\Wieldable;

abstract class WeaponDecorator implements Wieldable
{

    /**
     * @var Wieldable
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

    /**
     * @return int
     */
    public function getDamage()
    {
        return $this->getBonusDamage() + $this->wieldable->getDamage();
    }

    /**
     * @return array
     */
    public function getDamageType()
    {
        return array_merge($this->damageType, $this->wieldable->getDamageType());
    }

    /**
     * @return int
     */
    public function getBonusDamage()
    {
        return $this->bonusDamage;
    }

}
