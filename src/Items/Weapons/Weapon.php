<?php namespace Items\Weapons;

use Items\Interfaces\Wieldable;

class Weapon implements Wieldable
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var integer
     */
    protected $damage;
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
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
        return $this->damage;
    }

    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

}
