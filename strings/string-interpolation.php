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
echo "This access array as {$arr['foo'][1]} \n";

/**
 * replacing character inside string
 */
//access first character of the string
$first_string = "This is a string";
echo $first_string[0] . "\n";

//access third character
echo $first_string[2] . "\n";

//Get last character of the string
//To get the total no. of characters in a string use mb_strlen
echo $first_string[mb_strlen($first_string) - 1]."\n";

//Modify last character in string
$first_string[mb_strlen($first_string) - 1] = 'k';
echo $first_string;
