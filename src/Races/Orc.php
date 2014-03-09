<?php

namespace Races;

class Orc extends Race
{

    protected $name = "Orc";

    protected $statModifiers = [
      'str' => 2,
      'int' => -2
    ];

}
