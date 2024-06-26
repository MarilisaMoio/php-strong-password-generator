<?php
    require_once __DIR__ . "/functions.php";

    $subChar = [
        'minusc' => range("a", "z"),
        'maiusc' => range("A", "Z"),
        'num' => range("0", "9"),
        'special' => range("!", "+")
    ];
    
    $length = isset($_GET["length"]) ? intval($_GET["length"]) : 0;
    $repetition = isset($_GET["repetition"]) ? true : false;

    $filterArray = ["minusc"];

    isset($_GET["maiusc"]) ? $filterArray[] = "maiusc" : null;
    isset($_GET["num"]) ? $filterArray[] = "num" : null;
    isset($_GET["special"]) ? $filterArray[] = "special" : null;

    if($length !== 0) {
        session_start();
        $_SESSION["psw"] = createPsw($subChar, $length, $filterArray, $repetition);
        header("Location: ./psw.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psw Generator</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary ms-vh">
    <div class="container my-5">
        <div class="title text-center mb-5">
            <h1>Random Password Generator</h1>
            <h2 class="text-body-secondary">Il generatore di password più sicuro in circolazione</h2>
        </div>
        <form method="GET" class="bg-secondary-subtle border-secondary p-3 rounded">
            <div class="row mb-3">
                <div class="col-5 text-end">
                    <label class="col-form-label" for="length">Lunghezza desiderata</label>
                </div>
                <div class="col-7">
                    <input type="number" class="form-control" name="length" id="length" min="4" max="15" value="<?= $length ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-5 text-end">
                    <label class="col-form-label"></label>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switch" name="repetition" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Consentire la ripetizione di caratteri?</label>
                    </div>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group">
                        <input type="checkbox" class="btn-check" id="btncheck1" name="maiusc">
                        <label class="btn btn-outline-primary" for="btncheck1">Maiuscole</label>

                        <input type="checkbox" class="btn-check" id="btncheck2" name="num">
                        <label class="btn btn-outline-primary" for="btncheck2">Numeri</label>

                        <input type="checkbox" class="btn-check" id="btncheck3" name="special">
                        <label class="btn btn-outline-primary" for="btncheck3">Caratteri Speciali</label>
                    </div>
                    <small class="text-body-tertiary d-block">Se non vengono inseriti caratteri aggiuntivi, la password sarà composta solo da lettere minuscole</small>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Genera PSW</button>
                </div>
            </div>
        </form>
    </div>
    <!--bs js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--/bs js-->
</body>
</html>