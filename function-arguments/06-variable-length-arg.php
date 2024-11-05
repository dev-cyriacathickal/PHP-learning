<?php
/**
 * 
 *  PHP has support for variable-length argument lists in user-defined functions by using the ... token. 
 * 
 * Summary of getSum
 * @param array $args
 * @return float|int
 */
function getSum(...$args){
    $val = 0;
    foreach ($args as $key => $value) {
        $val += $value;
    }
    return $val;
}

echo getSum(1,2,3,4);