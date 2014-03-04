<?php namespace Weapons;

abstract class Weapon implements WeaponInterface
{
    protected $damage;

    public abstract function getDamage();

}