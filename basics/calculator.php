<?php

class Calculator {

    public function subtract($first_param, $second_param) {
        return $first_param - $second_param;
    }

    public function addition($first_param, $second_param) {
        return $first_param + $second_param;
    }
}

$calculator = new Calculator();
echo $calculator->subtract(7, 3); // returns 4
echo $calculator->addition(5, 5); // returns 10
