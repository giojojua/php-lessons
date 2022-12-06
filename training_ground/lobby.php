<?php require 'includes/header.php'?>

<div class="lobby">
    <h2>Character List:</h2>
    <?php
    if (isset($_POST['character_name'])) {
        echo 'ss';
    } else {
        echo "You don'\t have characters yet";
    }
    ?>
</div>

<?php require 'includes/footer.php'?>