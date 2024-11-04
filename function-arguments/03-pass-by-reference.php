<?php

/**
 * 
 * References are a way to have multiple variables referencing the same variable container using different names -- so whatever name you're using an operation on that variable will always have an effect on the others
 */
function addByReference(&$args){
    return $args .= ' Doe and I am a programmer.';
}

//argument should be passed a variable as of PHP 8.3
$param = 'Hi. I am Jhon';
// var_dump(addByReference($param));

function stringReference(&$argsString){
return $argsString[] = 30;
}

$argsString = array(10, 20);
$stringref = stringReference($argsString);
var_dump($argsString);
var_dump($stringref);

//copying a value
$a = 25;
$b = $a;
$b = 88;
echo $a."\n";
echo $b;