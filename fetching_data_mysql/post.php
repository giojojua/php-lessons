<?php
require('config/config.php');
require('config/db.php');

if (isset($_POST['delete'])) {
    // Get form data

    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE ID = $delete_id";

    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL);
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}


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

<?php include('inc/header.php'); ?>

    <a href="<?php echo ROOT_URL; ?>">Go Back</a>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created on<?php echo $post['created_at']; ?> by
        <?php echo $post['author']; ?> </small>
    <p><?php echo $post['content'] ?></p>
    <hr>
    <form action="" class="pull-right" method="post">
        <input type="hidden" name="delete_id" value="<?php echo $post['id'] ?>">
        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
    </form>
    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']?>" class="btn btn-default">Edit</a>
<?php include('inc/footer.php'); ?>