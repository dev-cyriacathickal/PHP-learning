<?php

function returnArray(){
    return array(1,2,3);
}

//destructuring an array

[$one,$two,$three] = returnArray();
echo $three;