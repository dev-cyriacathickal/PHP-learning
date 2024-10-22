<?php

/**
 *  Conversion of $a to int or float as appropriate. 
 */
$number = '55';
echo gettype($number) . "\n";
$no_conversion = +'55';
echo gettype($no_conversion) . "\n";

/**
 *  Conversion of $a to string as appropriate. 
 */
$str_number = 88;
$to_str_conversion = -$str_number;
echo gettype($to_str_conversion) . "\n";

$arithemetic_variable_1 = 9;
$arithemetic_variable_2 = 5;
/**
 * Addition
 */
echo $arithemetic_variable_1 + $arithemetic_variable_2 . "\n";

/**
 * Subtraction
 */
echo $arithemetic_variable_1 - $arithemetic_variable_2 . "\n";

/*
 * Multiplication
 */
echo $arithemetic_variable_1 * $arithemetic_variable_2 . "\n";

/**
 * Division
 */
echo $arithemetic_variable_1 / $arithemetic_variable_2 . "\n";

/*
 * Exponential
 */
echo $arithemetic_variable_1 ** $arithemetic_variable_2 . "\n";

/*
 * Modulus
 */
echo $arithemetic_variable_1 % $arithemetic_variable_2;
