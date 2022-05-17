<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, "nome");
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento');
$cpf = filter_input(INPUT_POST, 'cpf');
$telefone = filter_input(INPUT_POST, 'telefone'); 
$linguagem = filter_input(INPUT_POST, 'linguagem');
$experiencia = filter_input(INPUT_POST, 'experiencia');
$escolaridade = filter_input(INPUT_POST, 'escolaridade');
$chave = filter_input(INPUT_POST, 'chave');
$informe = filter_input(INPUT_POST, 'informe');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

//echo "Nome: $nome <br>";
//echo "data: $data <br>";
//echo "cpf: $cpf <br>";

$result_cadastrodev = "INSERT INTO cadastrodev (nome, dataNascimento, cpf, telefone, linguagem, experiencia, escolaridade, chave, informe, email, senha)
    VALUES ('$nome', '$dataNascimento', '$cpf', '$telefone', '$linguagem', '$experiencia', '$escolaridade', '$chave', '$informe', '$email','$senha')";
$resultado_cadastrodev = mysqli_query($conn, $result_cadastrodev);



if(mysqli_insert_id($conn)){
    $_SESSION ['msg'] = "<p style='color:green'> Usuário cadastrado com sucesso!</p";
    header("location: formulario_dev.php");
}else {
    $_SESSION ['msg'] = "<p style='color:red'> Usuário NÃO foi cadastrado com sucesso!</p";
    header("location: formulario_dev.php");
}

?>