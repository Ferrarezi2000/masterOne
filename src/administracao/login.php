<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
    <meta name="twitter:widgets:theme" content="light">
    <meta property="og:title" content="Master One" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Consultoria e inteligência em negócios" />
    <title>Master One</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../../assets/css/meu_css/login.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">

    <div class="col-md-10 col-md-offset-1 main" >
        <div class="col-md-6 left-side" >
            <h3>SiDDiQUiE.NET</h3>
            <p>Connect to SiDDiQUiE.NET network.</p>
            <br>


        </div><!--col-sm-6-->

        <div class="col-md-6 right-side">
            <h3 style="margin-bottom: 60px">Login</h3>

            <!--Form with header-->
            <div class="form">
                <form method="post" action="../../php/login/login.php" id="formlogin" name="formlogin">

                    <div class="form-group">
                        <label for="form2">Usuário</label>
                        <input type="text" class="form-control input-lg" placeholder="usuário" name="login" id="login">

                    </div>

                    <div class="form-group">
                        <label for="form4">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="senha" class="form-control input-lg">

                    </div>

                    <div class="text-xs-center" >
                        <input type="submit" class="btn btn-deep-purple" style="margin-top: 100px"/>
                    </div>

                </form>
            </div>
                <!--/Form with header-->

        </div><!--col-sm-6-->


    </div><!--col-sm-8-->

</div><!--container-->


</body>
</html>