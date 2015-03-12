<?php namespace Damage\DamageType;

abstract class DamageType
{

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

}
