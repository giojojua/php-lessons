<?php
require('config/config.php');
require('config/db.php');

// Check for submit
if (isset($_POST['submit'])) {
    // Get form data

    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "UPDATE posts SET
                title='$title',
                author='$author',
                content='$content'
              WHERE id = $update_id";

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
    <div class="container">
        <h1>Edit Posts</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input id="author" type="text" name="author" class="form-control"
                       value="<?php echo $post['author']; ?>">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control"><?php echo $post['content']; ?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
<?php include('inc/footer.php'); ?>