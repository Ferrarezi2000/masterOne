<?php

$hostProducao = "mysql.hostinger.com.br";
$userProducao = "u829562745_blog";
$senhaProducao = "123456";
$bancoProducao = "u829562745_blog";

$hostLocal = "localhost";
$userLocal = "root";
$senhaLocal = "1234";
$bancoLocal = "blog";


$conexao = new mysqli($hostLocal, $userLocal, $senhaLocal, $bancoLocal);
//$conexao = new mysqli($hostProducao, $userProducao, $senhaProducao, $bancoProducao);


if ($conexao) {
    $sql = mysqli_query($conexao, "SELECT * FROM blogs") or die( mysqli_error($conexao));

    $dados = array();
    while ($resultado = mysqli_fetch_array( $sql )) {

        $dados[] = array(
            "id" => $resultado['id'],
            "titulo" => $resultado['titulo'],
            "texto" => $resultado['texto'],
            "url" => $resultado['url'],
            "data" => $resultado['data']
        );
    }
}






