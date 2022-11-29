<?php
    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);
        // 1 Hour

        header('Location: page2.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <label for="">
        <input type="text" name="username" placeholder="Enter Username">
    </label>
    <br>
    <input type="submit" name="submit" value=" Submit">
</form>
</body>
</html>
