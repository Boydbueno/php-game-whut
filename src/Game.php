<?php

use SplSubject as TurnManager;

class Game
{

    private $turnManager;

    /**
     * @param SplSubject $turnManager
     */
    public function __construct(TurnManager $turnManager)
    {
        $this->turnManager = $turnManager;
    }

    public function turn($time)
    {
        // Todo: Implement
    }

}
