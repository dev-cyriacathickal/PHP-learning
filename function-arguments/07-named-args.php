<?php

/**
 * 
 * positional args vs named args
 * 
 * //positional
 * funSample(1,44,66);
 * 
 * //named
 * funsample(start_value:1, prim_value:44, secon_value:66);
 *  The order in which the named arguments are passed does not matter.
 */

 function getNameArgs($first,$second,$third){
    // var_dump($first);
    return $third;
 }

$get_name_args = getNameArgs(first: 1, second: 2, third: 3);
var_dump($get_name_args);

