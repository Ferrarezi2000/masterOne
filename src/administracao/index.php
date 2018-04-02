<?php include '../../php/bancoDados/todos-posts.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
    <meta name="twitter:widgets:theme" content="light">
    <meta property="og:title" content="Master One" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Consultoria e inteligência em negócios" />
    <title>Master One</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <?php include '../../php/componentes/session.php' ?>

</head>
<body>
<div class="section" style="margin-top: 45px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Posts</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 well">
                <a class="btn btn-primary" href="cadastro.php">
                    Novo Post
                </a>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr class="row-name">
                        <th style="width:5%">Id</th>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th style="width:50%">Texto</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    foreach($dados as $value){

                        echo'
                                <tr>
                                    <td>'.$value['id'].'</td>
                                    <td>
                                      <img src="../../imagens/minhas_imagens/blog/post/'.$value['imagem'].'" 
                                            width="80">
                                    </td>
                                    <td>'.$value['titulo'].'</td>
                                    <td style="text-align: justify">'.$value['texto'].'</td>
                                    <td>'.$value['data'].'</td>
                                    
                                    <td>
                                    <form action="../../php/bancoDados/deleta-post.php" method="post">
                                    <input name="id" value="'.$value['id'].'" style="display: none"/>
                                        <button type="submit">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                     </form>
                                    </td>
                                </tr>'
                            ;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <div style="margin-top: 15px; color: wheat"><?php echo $logado ?></div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../../index.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>