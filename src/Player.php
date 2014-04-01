<?php

use Units\Unit;

class Player extends Unit
{
    public function act($time)
    {
        $this->game->turn($time);
    }
}
