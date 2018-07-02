<?php

$hostProducao = "mysql.hostinger.com.br";
$userProducao = "u829562745_blog";
$senhaProducao = "123456";
$bancoProducao = "u829562745_blog";

$hostLocal = "localhost";
$userLocal = "root";
$senhaLocal = "1234";
$bancoLocal = "master-one";


$conexao = new mysqli($hostLocal, $userLocal, $senhaLocal, $bancoLocal) or die("Sem conexão com o servidor");
//$conexao = new mysqli($hostProducao, $userProducao, $senhaProducao, $bancoProducao) or die("Sem conexão com o servidor");

