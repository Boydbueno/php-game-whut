<?php namespace Enemies;

use Weapons\WeaponInterface;
use Weapons\WeaponBehavior;

use MoveBehaviors\MoveBehavior;
use Shootable;
use Moveable;

abstract class EnemyAbstract implements Shootable, Moveable
{

	protected $hp;
    protected $weapon;
    protected $moveBehavior;

    public function __construct(WeaponInterface $weapon, MoveBehavior $moveBehavior)
    {
        $this->weapon = $weapon;
        $this->moveBehavior = $moveBehavior;
    }

    public function shoot()
    {
        return $this->weapon->fire();
    }

    public function move()
    {
        return $this->moveBehavior->move();
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($value)
    {
        $this->hp = $value;
    }

    public function setWeapon(WeaponInterface $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setMoveBehavior(MoveBehavior $moveBehavior)
    {
        $this->moveBehavior = $moveBehavior;
    }
}
