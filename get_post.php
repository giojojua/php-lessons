<?php
if (isset($_GET['name'])) {
//    print_r($_GET);
    $name = htmlentities($_GET['name']);
//    echo $name;
}

//if (isset($_POST['name'])) {
//    print_r($_POST);
//    $name = htmlentities($_POST['name']);
//    echo $name;
//}

//if (isset($_REQUEST['name'])) {
//    print_r($_REQUEST);
//    $name = htmlentities($_REQUEST['name']);
//    echo $name;
//}

//echo $_SERVER['QUERY_STRING'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get & Post</title>
</head>
<body>
<form method="get" action="get_post.php">
    <div>
        <label for=""></label><br>
        <input type="text" name="name">
    </div>
    <div>
        <label for=""></label><br>
        <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
</form>
<ul>
    <li>
        <a href="get_post.php?name=Brad">Brad</a>
    </li>
    <li>
        <a href="get_post.php?name=Steve">Steve</a>
    </li>
</ul>
<h1><?php echo "$name's Profile";?></h1>
</body>
</html>