<?php

namespace Behaviors\AI;

use Behaviors\AI\Interfaces\IAI;

class Scared implements IAI
{

    function act()
    {
        return "Do some scared action";
    }

}
