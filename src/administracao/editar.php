<?php

include '../../php/componentes/session.php';
include '../../php/bancoDados/conexao.php';

$id = $_POST['id'];

if ($conexao) {

    $sql = mysqli_query($conexao, "SELECT * FROM post WHERE id = $id") or die(mysqli_error($conexao));
    $resultado = mysqli_fetch_assoc($sql);

}

echo $resultado["titulo"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->


</head>
<body>
<!--Menu-->
<div class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <div style="margin-top: 15px; color: wheat"><?php echo $logado ?></div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Voltar</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="section" style="margin-top: 70px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 well">
                Edição
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <form class="contact-form"
              action="../../php/bancoDados/editar-post.php" method="POST" enctype="multipart/form-data">

            <input type="text" id="id" name="id" style="display: none"
                   value="<?php echo $resultado[ "id" ] ?>"/>

            <div class="form-group">
                <div class="controls">
                    <label>Imagem</label>
                    <input name="imagem" type="file"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" id="titulo" class="form-control" name="titulo" autocomplete="off" required
                               value="<?php echo $resultado[ "titulo" ] ?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea id="texto" name="texto" placeholder="texto" required>
                            <?php echo $resultado[ "texto" ] ?>
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn main-btn pull-right">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../../ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'texto' );
</script>
</body>
</html>