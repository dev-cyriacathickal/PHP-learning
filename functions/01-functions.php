<?php 

/**
 * function example
 */

function fun_ex(/*$arg1, $arg2, $arg3, $argN*/){
    $fun_value = 'function example';
    return $fun_value;
}

$function_example = fun_ex();
var_dump($function_example);