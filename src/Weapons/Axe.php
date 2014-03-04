<?php namespace Weapons;

class Axe extends Weapon
{
	protected $damage = 14;

	public function fire()
	{
		return "Chopping with axe";
	}

	public function getDamage()
	{
		return $this->damage;
	}
}
