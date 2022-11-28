<?php include 'server-info.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Server & File Info</h1>
    <?php if ($server): ?>
        <ul class="list-group-item" style="list-style: none">
            <?php foreach ($server as $key => $value): ?>
            <li>
                <strong>
                    <?php echo $key;?> :
                </strong>
                <?php echo $value ?>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
<div class="container">
    <h1>Client Info</h1>
    <?php if ($client): ?>
        <ul class="list-group-item" style="list-style: none">
            <?php foreach ($client as $key => $value): ?>
                <li>
                    <strong>
                        <?php echo $key;?> :
                    </strong>
                    <?php echo $value ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
</body>
</html>