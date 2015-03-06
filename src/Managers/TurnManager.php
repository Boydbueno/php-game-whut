<?php namespace Managers;

class TurnManager implements \SplSubject
{

    private $observers = [];

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function getObservers()
    {
        return $this->observers;
    }

    public function detach(\SplObserver $observer)
    {
        $index = array_search($observer, $this->observers);

        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
