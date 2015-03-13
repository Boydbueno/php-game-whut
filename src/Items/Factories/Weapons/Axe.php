<?php

namespace Items\Factories\Weapons;

use Items\Weapons\Weapon;
use Items\Factories\Weapons\Weapon as WeaponFactory;

class Axe extends WeaponFactory
{

    protected function createWeapon($type)
    {

        $weapon = new Weapon();
        $weapon->setType('axe');
        $weapon->setName($type);

        switch($type) {
            case 'hand axe':
                $weapon->setDamage(14);
            break;
            case 'battle axe':
                $weapon->setDamage(17);
            break;
            case 'golem axe':
                $weapon->setDamage(21);
            break;

        }

        return $weapon;
    }

}
