<?php 
class Foo {
    static $variable = 'this is static property';
    static function Varible(){
        echo  'static variable called';
    }
}

echo Foo::$variable."\n";
$Varible = 'Varible';
$out = Foo::$Varible();
