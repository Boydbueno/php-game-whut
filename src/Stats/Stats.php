<?php namespace Stats;

class Stats
{

    private $str;
    private $sta;
    private $dex;
    private $int;
    private $wis;

    private $default = 0;

    private $stats = [
        'str',
        'sta',
        'dex',
        'int',
        'wis'
    ];

    public function __construct($stats)
    {

        $stats = $this->createMissingStats($stats);

        $this->str = new Strength($stats['str']);
        $this->sta = new Stamina($stats['sta']);
        $this->dex = new Dexterity($stats['dex']);
        $this->int = new Intelligence($stats['int']);
        $this->wis = new Wisdom($stats['wis']);
    }

    public function getDexterity()
    {
        return $this->dex->get();
    }

    public function getStamina()
    {
        return $this->sta->get();
    }

    public function getStrength()
    {
        return $this->str->get();
    }

    public function getIntelligence()
    {
        return $this->int->get();
    }

    public function getWisdom()
    {
        return $this->wis->get();
    }

    private function createMissingStats($stats)
    {
        foreach ($this->stats as $acronym) {
            if (!array_key_exists($acronym, $stats)) {
                $stats[$acronym] = $this->default;
            }
        }
        return $stats;
    }
}
