<?php
require('config/config.php');
require('config/db.php');

// Get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create Query
$query = 'SELECT * FROM posts WHERE id = ' . $id;

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);
//var_dump($posts);

// Close Connection
mysqli_close($conn);
?>

<?php include('inc/header.php') ?>

<a href="<?php echo ROOT_URL; ?>">Go Back</a>
<h1><?php echo $post['title']; ?></h1>
<small>Created on<?php echo $post['created_at']; ?> by
    <?php echo $post['author']; ?> </small>
<p><?php echo $post['content'] ?></p>

<?php include('inc/footer.php') ?>