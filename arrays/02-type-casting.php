<?php 
/**
 * Type casting & overwriting
 * Type casting is the process of converting a value from one data type to another data type.
 * values casted to one are overwritten on every new element
 */
$casting_array = array(
    1 => 'testone',
    '1' => 'testtwo',
    true => 'testthree',
    1.3 => 'testfour'
);
var_dump($casting_array);
