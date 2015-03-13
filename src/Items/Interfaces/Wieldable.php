<?php namespace Items\Interfaces;

interface Wieldable
{

    function getType();
    function setType($type);

    /**
     * @return integer
     */
    function getDamage();
    function setDamage($damage);

}
