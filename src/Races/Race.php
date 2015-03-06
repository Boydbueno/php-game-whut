<?php namespace Races;

use Stats\Stats;
use Stats\Interfaces\Stats as StatsInterface;

abstract class Race implements StatsInterface
{

    protected $statModifiers = [];

    protected $name;
    protected $stats;

    public function __construct()
    {
        $this->stats = new Stats($this->statModifiers);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function getStrength()
    {
        return $this->getStats()->getStrength();
    }

    public function getStamina()
    {
        return $this->getStats()->getStamina();
    }

    public function getDexterity()
    {
        return $this->getStats()->getDexterity();
    }

    public function getIntelligence()
    {
        return $this->getStats()->getIntelligence();
    }

    public function getWisdom()
    {
        return $this->getStats()->getWisdom();
    }
} 
