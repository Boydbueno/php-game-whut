<?php

namespace Races;

class Elf extends Race
{

    protected $name = "Elf";

    protected $statModifiers = [
        'sta' => -2,
        'dex' => 2
    ];

}
