<?php

    require_once __DIR__ . "./global.php";

    $password_length = $_GET['pass-length'];

    function generatePassword($password_length) {
        $length_characters_number = strlen($characters_number);
        $random_password = "";
        $i = 0;
        while ($i < $password_length) {
            $random_character = rand(0, $length_characters_number - 1);
            $random_password .= $characters_number[$random_character];
            $i++;
        }
        return $random_password;
    }

    echo generatePassword($password_length)
?>