<?php namespace Items\Factories\Weapons;

/**
 * Class Weapon
 * @package Items\Factories\Weapons
 */
abstract class Weapon
{

    public function create($type)
    {
        return $this->createWeapon($type);
    }

    abstract protected function createWeapon($type);

}
