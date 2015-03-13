<?php 

/**
 * Interface ValueObject
 */
interface ValueObject
{

    function get();
    function isEqualTo(ValueObject $valueObject);
    function __toString();

}
