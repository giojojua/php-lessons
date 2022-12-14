<?php
require('config/config.php');
require('config/db.php');

// Check for submit
if (isset($_POST['submit'])) {
    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "INSERT INTO posts(title, author, content) VALUES('$title', '$author', '$content')";

    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL);
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}

?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Add Posts</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input id="author" type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
<?php include('inc/footer.php'); ?>