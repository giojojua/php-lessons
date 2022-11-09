<?php
#FUNCTION - Block of code that can be repeatedly called

/*
 * Camel Case - myFunction()
 * Lower Case - my_function()
 * Pascal Case - MyFunction()
 */

// Create Simple Function
function simpleFunction(){
    echo 'Hello World';
}

// Run Simple Function
simpleFunction();

// Function With Params
function sayHello($name = 'World') {
    echo "<br>Hello $name";
}

sayHello();

// Example with more than one params
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

echo '<br>' . addNumbers(2,3) . '<br>';


// By Refference
$myNum = 10;

function addFive($num) {
    $num += 5; // num = num+5
}

function addTen(&$num) {
    $num += 10; // num = num+5
}

addFive($myNum);
echo "Value: $myNum <br>";

addTen($myNum);
echo "Value: $myNum <br>";