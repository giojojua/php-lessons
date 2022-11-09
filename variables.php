<?php

#VARIABLES
/*
 * Prefix - $
 * Start with a letter or an underscore
 * Only letters, numbers and underscores
 * Case sensitive
 */

#DATA TYPOS
/*
 * String
 * Integers
 * Floats
 * Booleans
 * Arrays
 * Objects
 * NULL
 * Resource
 */

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
echo $sum;

echo "<br>";

$string1 = 'Hello';
$string2 = 'World';

$greeting = $string1 . ' ' . $string2 . '!'; // Concat
$greeting2 = "$string1 $string2!"; // Concat
echo $greeting2;

echo "<br>";

$string3 = 'They\'re Here';

echo $string3;


echo "<br>";

$float1 = 4.4;
$bool1 = true;

const GREETING = 'Hello Everyone';
echo GREETING;
