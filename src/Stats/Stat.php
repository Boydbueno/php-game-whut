<?php namespace Stats;

use Stats\Exceptions\ShouldBeIntException;

abstract class Stat
{
    protected $name;
    protected $acronym;
    protected $value;

    /**
     * @param $startValue integer
     */
    public function __construct($startValue)
    {
        $this->set($startValue);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * @return integer
     */
    public function get()
    {
        return $this->value;
    }

    /**
     * @param $value
     */
    public function set($value)
    {
        $this->value = (int)$value;
    }
} 
