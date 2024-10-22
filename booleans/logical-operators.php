<?php

$a = false;
if ($a):
    echo 'true';
else:
    echo 'false';
endif;

/**
 * AND Operator
 */
$x = true;
$y = true;
if ($x && $y) {
    echo 'true';
} else {
    echo 'false';
}

/**
 * OR Operator
 */
$z = true;
$u = false;
if ($z || $u) {
    echo 'true';
} else {
    echo 'false';
}
