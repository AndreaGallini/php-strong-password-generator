<?php

function GeneraPassword()
{
    $password = '';
    $alfabetoMinuscolo = "abcdefghilmnopqestuvz";
    $alfabetoMaiuscolo = strtoupper($alfabetoMinuscolo);
    $numeri = '1234567890';
    $simboli = "!£$%&/()=?^";
    $mainFile = $alfabetoMinuscolo . $alfabetoMaiuscolo . $numeri . $simboli;
    $lunghezzaPsw = $_SESSION['psw'];
    var_dump($_SESSION);



    for ($i = 0; $i < $lunghezzaPsw; $i++) {


        $password .= substr($mainFile, rand(1, strlen($mainFile)), 1);
        // echo $password;



    }
    $_SESSION['pass'] = $password;
    header("location: ./pswview.php");




}