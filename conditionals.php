<?php
#CONDITIONALS

/*
 * == Equals
 * === Equals + Types -- Identical
 * > Greatter then
 * < Less then
 * >= Greatter then or Equal
 * <= Less then or Equal
 * != Not Equal
 * !== Not Identical
 */

$num = 6;

//if ($num > 5) {
//    echo '5 Passed';
//} else {
//    echo 'Error';
//}

#LOGICAL OPERATORS

/*
 * And - &&
 * or - ||
 * xor
 */

//if ($num > 4 || $num < 10) {
//    echo "$num Passed";
//}

#SWITCH

$favcolor = '';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default: echo 'You don\'t have favorite color';
}

?>