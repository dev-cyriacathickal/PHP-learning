<?php

function addByReference(&$args){
    return $args .= ' Doe. I am a programmer.';
}

//argument should be passed a variable as of PHP 8.3
$param = 'Hi. I am Jhon';
var_dump(addByReference($param));