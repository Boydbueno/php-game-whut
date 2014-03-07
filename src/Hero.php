<?php

use Items\Interfaces\Wieldable;
use Stats\Stats;
use Races\Race;
use Jobs\Job;

class Hero
{

    protected $stats;
    protected $race;
    protected $job;
    protected $level;

    protected $mainHand;

    public function __construct(Stats $stats, Race $race, Job $job, $level = 1)
    {
        $this->stats = $stats;
        $this->race = $race;
        $this->job = $job;

        $this->level = $level;
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

    public function attack()
    {
        return $this->mainHand->getDamage();
    }

    public function setMainHand(Wieldable $weapon)
    {
        $this->mainHand = $weapon;
    }
}
