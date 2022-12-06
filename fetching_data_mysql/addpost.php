<?php
require('config/config.php');
require('config/db.php');


?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Add Posts</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
<?php include('inc/footer.php'); ?>