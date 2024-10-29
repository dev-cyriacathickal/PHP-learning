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
//var_dump($custom_array);

//Exercise
//Create an array
$exp_array = array(1, 2, 3, 4, 5);

//delete all items but leave array intact
foreach ($exp_array as $i => $new_array):
    unset($exp_array[$i]);
endforeach;

var_dump($exp_array);

$exp_array[] = 6;
var_dump($exp_array);

//Reindex
$exmp_array = array_values($exp_array);
$exmp_array[] = 7;
var_dump($exmp_array);

/**
 * array destructuring
 */
$source_array = array('foo', 'barbar', 'test');
[$foo, $bar, $test] = $source_array;
var_dump($foo . "\n" . $bar . "\n" . $test);

//destructuring a multidimensional array using foreach
$multi_array = array(
    array(1, 'jhon'),
    array(2, 'michael')
);
foreach ($multi_array as [$id, $name]):
    echo $id . "\n";
    echo $name . "\n";
endforeach;

//Assigning particular index using destructuring
$another_source_array = array('foo', 'barbar', 'testdata');
[,, $testdata] = $another_source_array;
var_dump($testdata);

//in associative array
$src_associative_array = array('foo' => 1, 'bar' => 2, 'baz' => 3);
['baz' => $baz] = $src_associative_array;
var_dump($baz);

$simple_asc_array = array('foo','bar','baz');
[1 => $bar] = $simple_asc_array;
var_dump($bar);


//swap

$a = 2;
$b = 3;
[$a,$b] = [$b,$a];
var_dump("a is: ".$a);
var_dump("b is: ".$b);


