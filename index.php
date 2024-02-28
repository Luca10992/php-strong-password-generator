<?php

    require_once __DIR__ . "./global.php";

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icon-bear.png">
    <title>PHP Strong Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container text-center my-5">
            <h1>PHP Strong Password Generator</h1>
        </div>
    </header>
    <main>
        <div class="container w-50">
            <form method="GET">
                <div class="row">
                    <div class="col-8 fs-5">
                        <label class="form-label" for="pass-length">Lunghezza Password:</label>
                    </div>
                    <div class="col-4">
                        <input class="form-control" type="number" name="pass-length" id="pass-length" min="8" max="15">
                    </div>
                    <input type="submit" value="Genera">
                    <div class="col-8 fs-5">
                        <label class="form-label" for="pass-generated">Password generata: </label>
                    </div>
                    <div class="col-4">
                        <input class="form-control" type="text" name="pass-generated" id="pass-generated"
                            value="<?= $password ?>">
                    </div>

                </div>
            </form>
        </div>
    </main>

</body>

</html>