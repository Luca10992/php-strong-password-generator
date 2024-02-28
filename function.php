<?php
    $form_sent = !empty($_GET);
    function generatePassword($password_length) {
        $characters_number="abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
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
    if ($form_sent) {
        $password_length = $_GET['pass-length'] ?? false;
        if ($password_length) {
            $password = generatePassword($password_length);
        }
    } else {
        $password = "";
        $password_length = "";
    }
?>