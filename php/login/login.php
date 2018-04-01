<?php
include '../bancoDados/conexao.php';

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$result = mysqli_query($conexao, "SELECT * FROM `administrador` WHERE `nome` = '$login' AND `senha`= '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    header('location:http://127.0.0.1/edsa-Master%20One/src/administracao/');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    echo 'erro';
    header('location:http://127.0.0.1:8080/edsa-teste/');
}
