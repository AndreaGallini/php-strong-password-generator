<?php



GeneraPassword();
function GeneraPassword()
{
    $alfabetoMinuscolo = "abcdefghilmnopqestuvz";
    $alfabetoMaiuscolo = strtoupper($alfabetoMinuscolo);
    $numeri = 1234567890;
    $simboli = "!£$%&/()=?^";
    $lunghezzaPsw = $_GET["password"];
    echo $lunghezzaPsw;
    $counter = 0;
    for ($i = 0; $i < $lunghezzaPsw; $i++) {

        echo substr($alfabetoMinuscolo, 1, $counter);
        $counter++;

    }
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

            <input type="number" id="psw" name="password">
            <button type="submit">Genera la tua password</button>
        </form>
    </div>
</body>

</html>