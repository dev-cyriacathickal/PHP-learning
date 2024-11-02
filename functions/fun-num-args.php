<?php

function get_args(...$args){
    return func_get_args();
}

var_dump(get_args(1,2,3,4,5));