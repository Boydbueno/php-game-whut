<?php namespace Items\Weapons\Decorators;

use Items\Weapons\Weapon;
use Items\Interfaces\DamageDealable;

abstract class WeaponDecorator implements DamageDealable {

	protected $weapon;
	protected $bonusDamage;

	public function __construct(Weapon $weapon)
	{
		$this->weapon = $weapon;
	}

	public function getDamage()
	{
		return $this->bonusDamage + $this->weapon->getDamage();
	}

	public function getBonusDamage()
	{
		return $this->bonusDamage;
	}
}
