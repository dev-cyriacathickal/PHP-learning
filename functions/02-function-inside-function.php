<?php

function bar(){

    echo 'bar is called';
    function foo(){
        echo 'foo is called';
    }
}

//foo doesn't exist
//echo foo();

echo bar()."\n";

echo foo();