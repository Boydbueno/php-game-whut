<?php

namespace Damage;

use ValueObject;

class Damage implements ValueObject
{

    private $damage = 0;

    public function __construct($number)
    {
        $this->damage = $number;
    }

    function __toString()
    {
        return strval($this->damage);
    }

    function get()
    {
        return $this->damage;
    }

    function isEqualTo(ValueObject $valueObject)
    {
        return $this->get() === $valueObject->get();
    }

}
