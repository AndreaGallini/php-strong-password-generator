<?php

include __DIR__ . '/functions/functions.php';

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

<body class="container">
    <h2>La tua Password :</h2>
    <p>
        <?php echo GeneraPassword(); ?>
    </p>

</body>

</html>