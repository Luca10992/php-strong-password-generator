<?php 

    require_once __DIR__ . "./function.php";
    session_start();    
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
            <div class="row">
                <div class="col-8 fs-5">
                    <label class="form-label" for="pass-generated">Password generata: </label>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="pass-generated" id="pass-generated"
                        value="<?= $_SESSION['result-pass'] ?>">
                </div>
            </div>
        </div>
    </main>

</body>

</html>