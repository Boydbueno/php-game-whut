<?php

namespace Behaviors\AI;

use Behaviors\AI\Interfaces\IAI;

class Aggressive implements IAI
{

    function act()
    {
        return "Do some aggressive action";
    }

}
