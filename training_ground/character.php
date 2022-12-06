<?php

class Character
{
    public function __construct(
        public string $name,
        public string $race,
        public string $gender)
    {
        echo __CLASS__ . ' created successfully <br>';
    }
}

if (isset($_POST['character_name']) && isset($_POST['character_race']) && isset($_POST['character_gender'])) {
    $name = htmlentities($_POST['character_name']);
    $race = htmlentities($_POST['character_race']);
    $gender = htmlentities($_POST['character_gender']);

    $character = new Character($name, $race, $gender);


    header('Location: lobby.php');
} else {
    echo 'Something went wrong, please try again. <a class="link-group" href="/">Go back</a>';
}
