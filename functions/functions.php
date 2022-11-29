<?php
function GeneraPassword()
{

    $alfabetoMinuscolo = "abcdefghilmnopqestuvz";
    $alfabetoMaiuscolo = strtoupper($alfabetoMinuscolo);
    $numeri = '1234567890';
    $simboli = "!£$%&/()=?^";
    $mainFile = $alfabetoMinuscolo . $alfabetoMaiuscolo . $numeri . $simboli;
    $lunghezzaPsw = $_GET["password"];


    for ($i = 0; $i < $lunghezzaPsw; $i++) {

        $psw = substr($mainFile, rand(1, strlen($mainFile)), 1);



    }
    if (!empty($psw)) {
        session_start();
        $_SESSION['psw'] = $psw;
        header('Location pswview.php');
    }



}