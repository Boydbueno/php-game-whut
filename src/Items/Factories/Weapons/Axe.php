<?php

namespace Items\Factories\Weapons;
;
use Items\Weapons\Weapon;

class Axe
{

    public function create($type)
    {

        $weapon = new Weapon();
        $weapon->setType('axe');

        switch($type) {
            case 'normal':
                $weapon->setDamage(14);
            break;
            case 'rare':
                $weapon->setDamage(17);
            break;
            case 'epic':
                $weapon->setDamage(21);
            break;

        }

        return $weapon;
    }
}
