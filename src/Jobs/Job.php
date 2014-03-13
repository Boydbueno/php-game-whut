<?php namespace Jobs;

abstract class Job
{

    protected $name;
    protected $maxHealth;

    public function getName()
    {
        return $this->name;
    }

    public function getMaxHealth()
    {
        return $this->maxHealth;
    }

}
