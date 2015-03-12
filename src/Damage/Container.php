<?php

namespace Damage;

use Damage\DamageType\DamageType;

class Container
{

    /**
     * @var DamageType
     */
    private $damageType;
    /**
     * @var Damage
     */
    private $damage;

    /**
     * @param DamageType $damageType
     * @param Damage $damage
     */
    public function __construct(DamageType $damageType, Damage $damage)
    {
        $this->damageType = $damageType;
        $this->damage = $damage;
    }

    public function getDamageType()
    {
        return $this->damageType;
    }

    public function getDamage()
    {
        return $this->damage;
    }
}
