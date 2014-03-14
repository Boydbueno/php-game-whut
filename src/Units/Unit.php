<?php namespace Units;

use Exceptions\CantActWhenDeadException;

use Interfaces\Actable;
use Items\Interfaces\Wieldable;
use Stats\Interfaces\Stats as StatsInterface;
use Managers\Interfaces\CombatManager;
use Stats\Stats;
use Races\Race;
use Jobs\Job;
use Killable;

class Unit implements StatsInterface, Killable, Actable
{
    protected $health;

    protected $stats;
    protected $race;
    protected $job;
    protected $level;

    protected $mainHand;

    protected $combatManager;

    public function __construct(Stats $stats, Race $race, Job $job, CombatManager $combatManager, $level = 1)
    {
        $this->stats = $stats;
        $this->race = $race;
        $this->job = $job;

        $this->level = $level;

        $this->health = $this->getMaxHealth();

        $this->combatManager = $combatManager;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function levelUp()
    {
        $this->level++;
    }

    public function attack(Killable $target)
    {
        if ($this->isDead())
            throw new CantActWhenDeadException();

        $this->getCombatManager()->attack($this, $target);
    }

    public function setMainHand(Wieldable $weapon)
    {
        $this->mainHand = $weapon;
    }

    public function getStrength()
    {
        return $this->getStats()->getStrength() + $this->getRace()->getStrength();
    }

    public function getStamina()
    {
        return $this->getStats()->getStamina() + $this->getRace()->getStamina();
    }

    public function getDexterity()
    {
        return $this->getStats()->getDexterity() + $this->getRace()->getDexterity();
    }

    public function getIntelligence()
    {
        return $this->getStats()->getIntelligence() + $this->getRace()->getIntelligence();
    }

    public function getWisdom()
    {
        return $this->getStats()->getWisdom() + $this->getRace()->getWisdom();
    }

    public function getDamage()
    {
        return $this->getStats()->getStrength() + $this->getRace()->getStrength();
    }

    public function getMaxHealth()
    {
        return $this->getJob()->getMaxHealth() + ($this->getStats()->getStamina() * $this->getLevel());
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth($health)
    {
        if ($health > $this->getMaxHealth())
            $health = $this->getMaxHealth();

        if ($health < 0)
            $health = 0;

        $this->health = $health;
    }

    public function takeDamage($damage)
    {
        $this->setHealth($this->getHealth() - $damage);
    }

    public function isDead()
    {
        return ($this->getHealth() === 0);
    }

    function getCombatManager()
    {
        return $this->combatManager;
    }

    public function move()
    {
        return "Moving";
    }

    function act()
    {

    }
}
