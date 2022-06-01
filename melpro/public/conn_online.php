<?php
    $servidor = "localhost";
    $usuario = "id19017792_lucasortlieb";
    $senha = "4ZQRsbmG[RW1lt^d";
    $dbname = "id19017792_melpro";
    $port = "3306";


    //criar conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname, $port);

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>