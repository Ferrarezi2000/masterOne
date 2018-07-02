<?php
include 'conexao.php';

$id = $_POST['id'];

if ($conexao) {
    $sql = mysqli_query($conexao, "DELETE FROM post WHERE ID = $id ") or die(mysqli_error($conexao));

    echo "<script language='javascript' type='text/javascript'>
            alert('Post excluído com SUCESSO!');window.location.href='../../src/administracao/index.php';
          </script>";
} else {
    echo "<script language='javascript' type='text/javascript'>
            alert('Tente novamente mais tarde!');window.location.href='../../src/administracao/index.php';
          </script>";
}

