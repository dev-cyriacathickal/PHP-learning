<?php

$array = array(
    'pt_one' => 'one',
    'pt_two' => 'two'
);

$short_array = [
    'st_one' => 'one',
    'st_two' => 'two'
];

var_dump($array);
var_dump($short_array);

/**
 * Type casting & overwriting
 * values casted to one are overwritten on every new element
 */
$casting_array = array(
    1 => 'testone',
    '1' => 'testtwo',
    true => 'testthree',
    1.3 => 'testfour'
);
var_dump($casting_array);

/**
 * Mixed int and string keys
 */
$mixed_array = array(
    1 => 'firstData',
    2 => 'secondData',
    'foo' => 'thirdvalue',
    'bar' => 'fourthValue'
);

var_dump($mixed_array);

/**
 * Indexed arrays without keys
 */
$without_key_array = array(
    'firstParam',
    'secondParam',
    'thirdParam',
    'fourthParam'
);
var_dump($without_key_array);

/**
 * Key not on all elements
 */
$key_not_on_all = array(
    'firstParam',
    'secondParam',
    9 => 'ninthParam',
    10 => 'tenthParam'
);
var_dump($key_not_on_all);

/**
 * Accessing array elements with square bracket syntax ¶
 */
$simple_array = array('testone', 'testtwo', 'testthree');
var_dump($simple_array[1]);

//For multidimentional array
$multi_dimentional_array = array(
    'first_key' => 'firstParam',
    'foo' => 'fooVal',
    'multi' => array(
        'dimentional' => 'val',
        'array' => 'val2'
    )
);
var_dump($multi_dimentional_array['first_key']);
var_dump($multi_dimentional_array['foo']);
var_dump($multi_dimentional_array['multi']);
var_dump($multi_dimentional_array['multi']['dimentional']);
var_dump($multi_dimentional_array['multi']['array']);

/**
 * array dereferencing
 */
function getArray() {
    return array(1, 4, 6);
}

var_dump(getArray()[2]);

/**
 * Creating/modifying with square bracket syntax
 */
$custom_array = array(5 => 'test', 15 => 'testFive');
var_dump($custom_array[5]);

$custom_array[] = 89;
var_dump($custom_array);

$custom_array['x_key'] = 99;
var_dump($custom_array);

$custom_array[] = 100;
var_dump($custom_array);

$custom_array['y_key'] = 150;
var_dump($custom_array);

$custom_array[] = 200;
var_dump($custom_array);

unset($custom_array[5]);
var_dump($custom_array);

unset($custom_array);
var_dump($custom_array);

//Exercise
//Create an array
$exp_array = array(1, 2, 3, 4, 5);

//delete all items but leave array intact
foreach ($exp_array as $i => $new_array):
    unset($exp_array[$i]);
endforeach;

var_dump($exp_array);


$exmp_array = array(1, 2, 3, 4, 5);
$exmp_array[] = 6;
var_dump($exmp_array);