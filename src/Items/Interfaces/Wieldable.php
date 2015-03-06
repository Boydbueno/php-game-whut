<?php namespace Items\Interfaces;

interface Wieldable
{

    /**
     * @return integer
     */
    function getDamage();

    /**
     * @return string
     */
    function getDamageType();

}
