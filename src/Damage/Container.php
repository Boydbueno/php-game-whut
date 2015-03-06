<?php

namespace Damage;

use Damage\DamageType\DamageType;

class Container
{

    /**
     * @param damageType
     */
    private $damageType;

    /**
     * @param DamageType $damageType
     */
    public function __construct(DamageType $damageType)
    {
        $this->damageType = $damageType;
    }

    public function getDamageType()
    {
        return $this->damageType;
    }

}
