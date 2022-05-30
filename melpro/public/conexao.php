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

//var_dump($conn);
$sql = "SELECT * FROM cadastrodev; ";

$resultDb = mysqli_query($conn, $sql); //Realizando a consulta no banco de dados
 
//$i = 0; //Criando um índice comparativo
$numRows = $resultDb->num_rows; //Capturando quantas linhas obteve de resultado do banco

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>
        <table>
            <thead>
                <th>Nome</th>
                <th>Telefone</th>
            </thead>        
<?php

if ($resultDb) {
    /* fetch associative array */
    while ($row = $resultDb->fetch_assoc()) : ?>
        
        <tbody>
            <td> <?= $row['nome'] ?> </td>
            <td> <?= $row['telefone'] ?> </td>
        </tbody>

    <?php endwhile;

    /* free result set */
    $resultDb->close();
}

?>

        </tbody>
    </table>
</body>
</html>