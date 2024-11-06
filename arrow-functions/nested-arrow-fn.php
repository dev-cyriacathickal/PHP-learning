<?php

$nd_arrw = fn($x): callable => fn($z): int => $x + $z;
var_dump($nd_arrw(5)(5));