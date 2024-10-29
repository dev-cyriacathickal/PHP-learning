<?php 
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


// Multi dimentional array
$multi_array_ini = array(
    'fruits' => array('grape','mango','jackfruit','guava'),
    'numbers' => array(1,2,3,4,5,6),
    'vegetables' => array('peas','cabbage','brinjal')
);
var_dump($multi_array_ini);