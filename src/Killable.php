<?php

interface Killable
{
    function getMaxHealth();

    function getHealth();

    function takeDamage($damage);

    function isDead();
}
