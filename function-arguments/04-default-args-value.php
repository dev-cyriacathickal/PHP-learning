<?php

/**
 * 
 * A function may define default values for arguments using syntax similar to assigning a variable. The default is used only when the parameter is not specified;
 * @param mixed $food
 * @return string
 */
function makeFood($food ='sandwich'){
    return 'I made ' . $food;
}

var_dump(makeFood());
var_dump(makeFood(null));
var_dump(makeFood('burger'));