<?php

session_start();
include __DIR__ . '/functions/functions.php';
if (isset($_GET['password']) && !empty($_GET['password'])) {

    $_SESSION['psw'] = $_GET['password'];
    GeneraPassword();
}
;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Crea la tua password sicura</h1>
        <form action="index.php" method="get">

            <input type="number" id="psw" name="password" placeholder="Numero di caratteri">
            <button type="submit">Genera la tua password</button>
        </form>
    </div>
</body>

</html>