<?php namespace Stats;

use Stats\Exceptions\ShouldBeIntException;

abstract class Stat
{
    protected $name;
    protected $acronym;
    protected $value;

    public function __construct($startValue)
    {
        $this->set($startValue);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAcronym()
    {
        return $this->acronym;
    }

    public function get()
    {
        return $this->value;
    }

    public function set($value)
    {
        $this->value = (int)$value;
    }
} 
