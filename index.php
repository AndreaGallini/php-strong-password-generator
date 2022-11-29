<?php

include __DIR__ . '/functions/functions.php';
if (isset($_GET['password'])) {
}
;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="index.php" method="get">
            <p>
                <?php echo GeneraPassword(); ?>
            </p>
            <input type="number" id="psw" name="password">
            <button type="submit">Genera la tua password</button>
        </form>
    </div>
</body>

</html>