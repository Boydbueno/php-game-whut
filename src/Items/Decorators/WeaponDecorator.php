<?php namespace Items\Decorators;

use Items\Weapons\Weapon;
use Items\Interfaces\Wieldable;

abstract class WeaponDecorator implements Wieldable {

	protected $weapon;
	protected $bonusDamage;

	public function __construct(Weapon $weapon)
	{
		$this->weapon = $weapon;
	}

	public function getDamage()
	{
		return $this->getBonusDamage() + $this->weapon->getDamage();
	}

	public function getBonusDamage()
	{
		return $this->bonusDamage;
	}
}
