<?php namespace Items\Weapons;

use Items\Interfaces\Wieldable;

abstract class Weapon implements Wieldable
{

    /**
     * @var integer
     */
    protected $damage;

    /**
     * @var string
     */
    protected $damageTypes;

    /**
     * @return int
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @return string
     */
    public function getDamageType()
    {
        return $this->damageTypes;
    }

}
