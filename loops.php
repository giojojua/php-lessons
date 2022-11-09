<?php
#LOOPS - Execute code set number of times

/*
 * For
 * While
 * Do..While
 * Foreach
 */

#FOR LOOP
# @params - init, condition, increment
//for ($i = 0; $i <= 10; $i++) {
//    echo 'Number ' . $i;
//    echo '<br>';
//}

#WHILE LOOP
# @params - condition

//$i = 0;
//while ($i < 10) {
//    echo $i;
//    echo '<br>';
//    $i++;
//}

#DO WHILE LOOP
# @params - condition
//$i = 0;
//do {
//    echo $i;
//    echo '<br>';
//    $i++;
//} while ($i < 10);

#FOREACH LOOP - FOR ARRAYS
# @params - array name, key(optional) - value
$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

foreach ($people as $person => $email) {
    echo $person . ': ' .$email;
    echo '<br>';
}