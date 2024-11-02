<?php 

function getAllArgs($args){
    return $args[0] . $args[1];
}

$get_args = getAllArgs($args = array(6, 9));
var_dump($get_args);