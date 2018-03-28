<?php

$conexao = new mysqli("localhost", "root", "1234", "blog");
$sql = mysqli_query($conexao, "SELECT * FROM blogs") or die( mysqli_error($conexao));


if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL.";
    exit;
}

$sucesso = "Sucesso ao conectar-se com a base de dados MySQL.";

$dados = array();
while ($resultado = mysqli_fetch_array( $sql ) ) {

    $dados[] = array(
        "id" => $resultado['id'],
        "titulo" => $resultado['titulo'],
        "texto" => $resultado['texto'],
        "url" => $resultado['url'],
        "data" => $resultado['data']
    );

}






