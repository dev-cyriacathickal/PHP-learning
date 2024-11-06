<?php

$msg = "Hello User \n";

$user = function () {
    return "user returned \n";
};

var_dump($user());

//Inherit
$user_inherit = function () use ($msg) {
    return $msg;
};

var_dump($user_inherit($msg));