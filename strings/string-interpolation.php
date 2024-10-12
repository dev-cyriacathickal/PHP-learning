<?php

/**
 * Interpolation
 * Simple syntax
 */
$fruit = 'apple';
echo "He drank an $fruit juice." . PHP_EOL;

/**
 * Interpolation of value in single dimensional array or property
 */
$array = array('apple', 'orange', 'key_juice' => 'grape');
echo "He drank $array[0] juice";
echo PHP_EOL;
echo "He drank $array[1] juice";
echo PHP_EOL;
echo "He drank $array[key_juice] juice";
echo PHP_EOL;

class foo {

    public $s = "foo string\n";
}

$foo = new foo();
echo 'Object value: ' . $foo->s;

/**
 * Negative numeric indices
 */
$string = 'string';
echo $string[-2] . "\n";
$string[-3] = 'o';
echo $string . "\n";

/*
 * Advanced syntax
 */
const DATA_KEY = 'const-key';
$great = 'fantastic';
$arr = [
    '1',
    '2',
    '3',
    [41, 42, 43],
    'key' => 'Indexed value',
    'const-key' => 'Key with minus sign',
    'foo' => ['foo1', 'foo2', 'foo3']
];

//This won't work
echo "This is a { $great } performance \n";

//This will work
echo "This is a {$great} performance \n";

/**
 * In class
 */
class Square {

    public $width;

    function __construct(int $width) {
        $this->width = $width;
    }
}

$square = new Square(6);
echo "The square is {$square->width}00 cm wider \n";

//accessing the array
echo "This shows {$arr['key']} \n";
echo "This access data key as {$arr[DATA_KEY]} \n";
echo "This access array as {$arr['foo'][1]}";

/**
 * String access and modification
 */
