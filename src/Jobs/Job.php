<?php namespace Jobs;

abstract class Job
{

    protected $name;
    protected $maxHealth;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getMaxHealth()
    {
        return $this->maxHealth;
    }

}
