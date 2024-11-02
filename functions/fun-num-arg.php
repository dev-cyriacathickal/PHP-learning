<?php 

function numArg(){
    $args_number = func_get_args();
    if ($args_number > 2):
        echo func_get_arg(3);
    endif;
}

numArg(4, 5, 6, 7, 8);