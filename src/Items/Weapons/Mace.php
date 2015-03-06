<?php namespace Items\Weapons;

class Mace extends Weapon
{

    protected $damage = 12;
    protected $damageTypes = ['blunt'];
    protected $statusEffects = ['stun'];

    public function getStatusEffects()
    {
        return ['stun'];
    }
    
}
