<?php

interface Killable {
    function getCombatManager();
    function getMaxHealth();
    function getHealth();
    function takeDamage($damage);
    function isDead();
}
