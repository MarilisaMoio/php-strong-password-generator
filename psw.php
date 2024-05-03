<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tua nuova password</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary ms-vh d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="alert alert-info text-center" role="alert">
            La tua nuova password è <span class="censored"><?= $_SESSION["psw"] ?></span>
            <div class="mt-3">
                <button class="btn btn-primary"><a class="text-decoration-none text-white"href="./index.php">Clicca qui per cambiare i parametri e generare una nuova psw</a></button>
            </div>
        </div>
    </div>
    <!--bs js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--/bs js-->
</body>
</html>