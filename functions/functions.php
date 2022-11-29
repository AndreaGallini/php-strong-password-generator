<?php
session_start();
function GeneraPassword()
{

    $alfabetoMinuscolo = "abcdefghilmnopqestuvz";
    $alfabetoMaiuscolo = strtoupper($alfabetoMinuscolo);
    $numeri = '1234567890';
    $simboli = "!£$%&/()=?^";
    $mainFile = $alfabetoMinuscolo . $alfabetoMaiuscolo . $numeri . $simboli;
    $lunghezzaPsw = $_SESSION['psw'];



    for ($i = 0; $i < $lunghezzaPsw; $i++) {


        $psw = substr($mainFile, rand(1, strlen($mainFile)), 1);
        echo $psw;



    }
    if (!empty($psw)) {
        header("location: ./pswview.php");
    }



}