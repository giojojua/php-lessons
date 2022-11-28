<?php
    if (isset($_POST['submit'])) {
        session_start();

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

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
    <title>PHP Sessions</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="">
        <input id="" type="text" name="name" placeholder="Enter Name">
    </label>
    <br>
    <label for="">
        <input id="" type="text" name="email" placeholder="Enter Email">
    </label>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
