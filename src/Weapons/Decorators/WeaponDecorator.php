<?php namespace Weapons\Decorators;

use Weapons\Weapon;
use Weapons\Interfaces\DamageDealable;

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