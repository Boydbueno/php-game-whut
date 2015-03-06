<?php namespace Races;

use Stats\Stats;
use Stats\Interfaces\Stats as StatsInterface;

abstract class Race implements StatsInterface
{

    /**
     * @var array
     */
    protected $statModifiers = [];

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Stats
     */
    protected $stats;

    public function __construct()
    {
        $this->stats = new Stats($this->statModifiers);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Stats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->getStats()->getStrength();
    }

    /**
     * @return int
     */
    public function getStamina()
    {
        return $this->getStats()->getStamina();
    }

    /**
     * @return int
     */
    public function getDexterity()
    {
        return $this->getStats()->getDexterity();
    }

    /**
     * @return int
     */
    public function getIntelligence()
    {
        return $this->getStats()->getIntelligence();
    }

    /**
     * @return int
     */
    public function getWisdom()
    {
        return $this->getStats()->getWisdom();
    }
} 
