<?php
#Array - Variable that holds multiple values
/*
 * Indexed
 * Associative
 * Multi-dimensional
 */

#INDEXED
$people = array('kevin', 'Jeremy', 'Sara');
echo $people[1];

$ids = array(23, 55, 12);
echo $ids[2];

$cars = ['Honda', 'Toyota', 'Ford'];
echo $cars[1];

$cars[3] = 'Chevy';
echo $cars[3];

$cars[] = 'BMW';
echo count($cars); // counts array items

print_r($cars); // shows full array

echo "<br>";

var_dump($cars); // shows full array with data types, array count and array item characters

echo "<br>";

# ASSOCIATIVE ARRAYS
$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
echo $people['Brad'];

echo "<br>";

$ids2 = array(35 => 'Brad', 32 => 'Jose', 37 => 'William');
echo $ids2[35];

echo "<br>";

$people['Jill'] = 42;
print_r($people);

echo "<br>";

var_dump($people);

echo "<br>";

#MULTI-DIMENSIONAL

$cars2 = array(array('Honda', 20, 10), array('Toyota', 30, 20), array('Ford', 23, 12));
echo $cars2[1][0];