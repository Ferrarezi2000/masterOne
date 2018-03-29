<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];


$hostLocal = "localhost";
$userLocal = "root";
$senhaLocal = "1234";
$bancoLocal = "blog";

$conexao = new mysqli($hostLocal, $userLocal, $senhaLocal, $bancoLocal) or die ("Sem conexão com o servidor");

$result = mysqli_query($conexao, "SELECT * FROM `administradores` WHERE `nome` = '$login' AND `senha`= '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    header('location:http://127.0.0.1:8080/edsa-teste/src/administracao/');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    echo 'erro';
    header('location:http://127.0.0.1:8080/edsa-teste/');
}
