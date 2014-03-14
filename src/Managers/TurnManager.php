<?php

namespace Managers;

class TurnManager
{

    private $observers = [];

    public function attach($observer)
    {
        $this->observers[] = $observer;
    }

    public function getObservers()
    {
        return $this->observers;
    }

    public function detach($observer)
    {
        $index = array_search($observer, $this->observers);

        if($index !== false)
        {
            unset($this->observers[$index]);
        }

    }
}
