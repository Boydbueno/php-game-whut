<?php namespace Enemies;

use Items\Interfaces\Wieldable;

use Behaviors\Move\MoveInterface;
use Shootable;
use Moveable;

abstract class EnemyAbstract implements Shootable, Moveable
{

    protected $maxHp;
	protected $currentHp;
    protected $weapon;
    protected $moveInterface;
    protected $stats;

    public function __construct(Wieldable $weapon, MoveInterface $moveInterface)
    {
        $this->weapon = $weapon;
        $this->moveInterface = $moveInterface;
    }

    public function shoot()
    {
        return $this->weapon->fire();
    }

    public function move()
    {
        return $this->moveInterface->move();
    }

    public function getHp()
    {
        return $this->currentHp;
    }

    public function setHp($value)
    {
        $this->currentHp = $value;
    }

    public function getMaxHp()
    {
        return $this->maxHp;
    }

    public function getDexterity()
    {
        return $this->stats['dexterity'];
    }

    public function setWeapon(Wieldable $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setMoveInterface(MoveInterface $moveInterface)
    {
        $this->moveInterface = $moveInterface;
    }
}
