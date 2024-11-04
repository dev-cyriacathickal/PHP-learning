<?php 

/**
 * 
 * Passing arrays into functions
 * @param mixed $args
 * @return string
 */
function getAllArgs($args){
    return $args[0] . $args[1];
}
$args = array(6, 9);
$get_args = getAllArgs($args);
var_dump($get_args);