<?php
include 'conexao.php';

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$imagem = $_FILES['imagem']['name'];

if ($imagem !== "") {
    $arquivo_tmp = $_FILES['imagem']['tmp_name'];
    $nome = $_FILES['imagem']['name'];

// Pega a extensão
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

// Converte a extensão para minúsculo
    $extensao = strtolower($extensao);

// Somente imagens, .jpg;.jpeg;.gif;.png
    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
        $novoNome = uniqid(time()) . '.' . $extensao;
        // Concatena a pasta com o nome
        $destino = '../../imagens/minhas_imagens/blog/post/' . $novoNome;

        if (@move_uploaded_file($arquivo_tmp, $destino)) {

        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert('Falha ao salvar imagem.');
                  </script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Formato incopativel... use somente arquivos (.jpg;.jpeg;.gif;.png)');
              </script>";
    }
} else {
    $novoNome = 'padrao.jpg';
}

date_default_timezone_set('America/Sao_Paulo');
$data = date('d-m-Y');

if ($conexao) {

    $query = "INSERT INTO post (titulo, texto, imagem, data) VALUES ('$titulo', '$texto', '$novoNome', '$data')";
    $insert = mysqli_query($conexao, $query);
    $erro = mysqli_error($conexao);

    if ($insert) {
        echo "<script language='javascript' type='text/javascript'>
                alert('Post cadastrado com sucesso!');window.location.href='../../src/administracao/index.php';
              </script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Tente novamente mais tarde.');window.location.href='../../src/administracao/index.php';
              </script>";
    }
}
