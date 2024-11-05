<?php 

class Foo{
    function Variable(){
        $name = 'Method';
        return $this->$name(); //calls method function
    }

    function Method(){
        return 'method is called';
    }
}

$foo = new Foo();
var_dump($foo->Variable())."\n";
$bar = 'Variable';
var_dump($foo->$bar());