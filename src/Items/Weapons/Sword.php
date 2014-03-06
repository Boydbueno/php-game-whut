<?php namespace Items\Weapons;

class Sword extends Weapon
{
	protected $damage = 10;

    public function fire()
    {
        return "Slashing with sword";
    }

}
