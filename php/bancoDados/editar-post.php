<?php
include 'conexao.php';

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];

date_default_timezone_set('America/Sao_Paulo');
$data = date('d-m-Y');

if ($conexao) {
    $sql = mysqli_query($conexao, "UPDATE post SET titulo='$titulo', texto='$texto', data='$data' WHERE id = $id ") or die(mysqli_error($conexao));

    if ($sql) {
        echo "<script language='javascript' type='text/javascript'>
                alert('Post editado com sucesso!');window.location.href='../../src/administracao/index.php';
              </script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Tente novamente mais tarde.');window.location.href='../../src/administracao/index.php';
              </script>";
    }
}
