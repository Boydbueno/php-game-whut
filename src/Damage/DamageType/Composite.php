<?php

namespace Damage\DamageType;

class Composite extends DamageType
{

    /**
     * @var DamageType[]
     */
    private $damageTypes = [];

    /**
     * @return string
     */
    public function getDescription()
    {
        $description = "";
        foreach ($this->damageTypes as $damageType) {
            $description .= $damageType->getDescription();
        }

        return $description;
    }

    /**
     * @param DamageType $damageType
     */
    public function add(DamageType $damageType)
    {
        $this->damageTypes[] = $damageType;
    }

    /**
     * @param DamageType $damageType
     */
    public function remove(DamageType $damageType)
    {
        $key = array_search($damageType, $this->damageTypes);
        if (!$key) {
            return;
        }

        unset($this->damageTypes[$key]);
    }
}
