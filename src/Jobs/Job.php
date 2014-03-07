<?php namespace Jobs;

abstract class Job {

    protected $name;

    public function getName()
    {
        return $this->name;
    }

}
