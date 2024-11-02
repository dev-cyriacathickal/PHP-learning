<?php 

function numArg(){
    $args_number = func_get_args();
    echo 'Total arguments: '. func_num_args(). "\n";
    if ($args_number > 2):
        echo 'Position value is: '. func_get_arg(3);
    endif;
}

numArg(4, 5, 6, 7, 8);