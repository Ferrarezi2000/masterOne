<?php
include 'conexao.php';

if ($conexao) {
    $sql = mysqli_query($conexao, "SELECT * FROM post ORDER BY data DESC") or die( mysqli_error($conexao));

    $dados = array();
    while ($resultado = mysqli_fetch_array( $sql )) {

        $dados[] = array(
            "id" => $resultado['id'],
            "titulo" => $resultado['titulo'],
            "texto" => $resultado['texto'],
            "imagem" => $resultado['imagem'],
            "data" => $resultado['data']
        );
    }
}