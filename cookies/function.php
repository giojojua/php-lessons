<?php
if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);

    setcookie('username', $username, time() + 3600);
    // 1 Hour

    header('Location: page2.php');
}
