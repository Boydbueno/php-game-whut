<?php  namespace Races; 

use Stats\Stats;

abstract class Race
{
    protected $name;
    protected $stats;

    public function __construct(Stats $stats)
    {
        $this->stats = $stats;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStats()
    {
        return $this->stats;
    }
} 
