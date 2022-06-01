<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "cadastro";
    $port = "3307";


    //criar conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname, $port);

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>