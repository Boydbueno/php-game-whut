<?php namespace Managers;

class TurnManager implements \SplSubject
{

    /**
     * @var array
     */
    private $observers = [];

    /**
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @return array
     */
    public function getObservers()
    {
        return $this->observers;
    }

    /**
     * @param \SplObserver $observer
     */
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
