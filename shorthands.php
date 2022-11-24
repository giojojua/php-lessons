<?php
$loggedIn = true;
$arr = [1, 2, 3, 4];

//if ($loggedIn) {
//    echo 'You are logged in';
//} else {
//    echo 'Your are not logged in';
//}

//echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

//$isRegistered = ($loggedIn == true) ? 'logged in' : 'not logged in';
//
//echo $isRegistered

//$age = 7;
//$score = 12;
//
//echo 'Your score is:' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

?>

<?php if ($loggedIn) { ?>
    <h1>sasa</h1>
<?php } ?>

<?php foreach ($arr as $val): ?>
    <?php echo "<h1>$val</h1>" ?>
<?php endforeach; ?>
