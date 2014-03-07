<?php

class Stats
{

    private $str;
    private $con;
    private $dex;
    private $int;
    private $wis;

    public function __construct($stats)
    {
        $this->str = $stats['str'];
        $this->con = $stats['con'];
        $this->dex = $stats['dex'];
        $this->int = $stats['int'];
        $this->wis = $stats['wis'];
    }

    public function getDexterity()
    {
        return $this->dex;
    }

    public function getStrength()
    {
        return $this->str;
    }
}
