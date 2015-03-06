<?php namespace Damage\DamageType;

abstract class DamageType
{
    protected $description;

    public function getDescription()
    {
        return $this->description;
    }
}
