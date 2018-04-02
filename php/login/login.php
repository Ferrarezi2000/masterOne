<?php
include '../bancoDados/conexao.php';

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$result = mysqli_query($conexao, "SELECT * FROM `administrador` WHERE `nome` = '$login' AND `senha`= '$senha'");

if(mysqli_num_rows ($result) > 0)
{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    echo "<script language='javascript' type='text/javascript'>
             window.location.href='../../src/administracao/index.php';
          </script>";
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    echo "<script language='javascript' type='text/javascript'>
             alert('Usuário ou senha inválido.');window.location.href='../../src/administracao/login.php';
          </script>";
}
