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

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/soulrider911/pen/ugnyl?limit=all&page=5&q=form" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <style class="cp-pen-styles">html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            font-size: 100%;
            vertical-align: baseline;
        }

        html {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        caption, th, td {
            text-align: left;
            font-weight: normal;
            vertical-align: middle;
        }

        q, blockquote {
            quotes: none;
        }
        q:before, q:after, blockquote:before, blockquote:after {
            content: "";
            content: none;
        }

        a img {
            border: none;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
            display: block;
        }

        /* Colors */
        /* ---------------------------------------- */
        * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            text-align: center;
            font-family: 'Lato', 'sans-serif';
            font-weight: 400;
        }

        a {
            text-decoration: none;
        }

        header, form {
            padding: 4em 10%;
        }

        header {
            background-color: #077ABC;
            color: white;
        }
        header h1 {
            font-weight: 400;
            text-transform: uppercase;
            font-size: 50px;
            margin-bottom: 10px;
        }
        header h1 i {
            color: #055a8b;
        }
        header h1 span {
            font-weight: 300;
        }
        header p {
            font-weight: 400;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            letter-spacing: .05em;
            margin-bottom: 10px;
        }
        header h3,
        header h3 a {
            color: #32CCFE;
        }
        header h3 a,
        header h3 a a {
            -moz-transition: color 0.3s;
            -o-transition: color 0.3s;
            -webkit-transition: color 0.3s;
            transition: color 0.3s;
        }
        header h3 a:hover,
        header h3 a a:hover {
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        h2.heading {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 300;
            text-align: left;
            color: #506982;
            border-bottom: 1px solid #506982;
            padding-bottom: 3px;
            margin-bottom: 20px;
        }

        .controls {
            text-align: left;
            position: relative;
        }
        .controls input[type="text"],
        .controls input[type="email"],
        .controls input[type="tel"],
        .controls textarea,
        .controls button,
        .controls select {
            padding: 12px;
            font-size: 14px;
            border: 1px solid #c6c6c6;
            width: 100%;
            margin-bottom: 18px;
            color: #888;
            font-family: 'Lato', 'sans-serif';
            font-size: 16px;
            font-weight: 300;
            background-color: #fff;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        .controls input[type="text"]:focus, .controls input[type="text"]:hover,
        .controls input[type="email"]:focus,
        .controls input[type="email"]:hover,
        .controls input[type="tel"]:focus,
        .controls input[type="tel"]:hover,
        .controls textarea:focus,
        .controls textarea:hover,
        .controls button:focus,
        .controls button:hover,
        .controls select:focus,
        .controls select:hover {
            outline: none;
            border-color: #9FB1C1;
        }
        .controls input[type="text"]:focus + label, .controls input[type="text"]:hover + label,
        .controls input[type="email"]:focus + label,
        .controls input[type="email"]:hover + label,
        .controls input[type="tel"]:focus + label,
        .controls input[type="tel"]:hover + label,
        .controls textarea:focus + label,
        .controls textarea:hover + label,
        .controls button:focus + label,
        .controls button:hover + label,
        .controls select:focus + label,
        .controls select:hover + label {
            color: #077ABC;
            cursor: text;
        }
        .controls .fa-sort {
            position: absolute;
            right: 10px;
            top: 17px;
            color: #999;
        }
        .controls select {
            -moz-appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
        }
        .controls label {
            position: absolute;
            left: 8px;
            top: 12px;
            color: #999;
            font-size: 16px;
            display: inline-block;
            padding: 4px 10px;
            font-weight: 400;
            background-color: rgba(255, 255, 255, 0);
            pointer-events: none;
            -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
            -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
            -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
            transition: color 0.3s, top 0.3s, background-color 0.8s;
        }
        .controls label.active {
            top: -11px;
            color: #555;
            background-color: white;
        }
        .controls textarea {
            resize: none;
            height: 200px;
        }
        .controls button {
            cursor: pointer;
            background-color: #07B3A1;
            border: none;
            color: #fff;
            padding: 12px 0;
        }
        .controls button:hover {
            background-color: #08ccb7;
        }
    </style>

</head>
<body>

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
                Editar Post
            </div>
        </div>
    </div>
</div>

<form action="../../php/bancoDados/editar-post.php" method="POST" enctype="multipart/form-data"
      style="padding: 0px !important; margin-right: 30%; margin-left: 30%; margin-top: 20px">

    <input id="id" name="id" value="<?php echo $resultado["id"] ?>" style="display: none"/>

    <!--  General -->
    <div class="form-group">

        <div class="controls">
            <input type="text" id="titulo" class="floatLabel" name="titulo" value="<?php echo $resultado["titulo"] ?>" required />
            <label for="titulo">Título</label>
        </div>
    </div>

    <!--  More -->
    <div class="form-group">
        <div class="controls">
            <textarea name="texto" class="floatLabel" id="texto" required ><?php echo $resultado["texto"] ?></textarea>
            <label for="texto">Texto</label>
            <button type="submit">Salvar</button>
        </div>
    </div>

</form>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >(function($){
        function floatLabel(inputType){
            $(inputType).each(function(){
                var $this = $(this);
                // on focus add cladd active to label
                $this.focus(function(){
                    $this.next().addClass("active");
                });
                //on blur check field and remove class if needed
                $this.blur(function(){
                    if($this.val() === '' || $this.val() === 'blank'){
                        $this.next().removeClass();
                    }
                });
            });
        }
        // just add a class of "floatLabel to the input field!"
        floatLabel(".floatLabel");
    })(jQuery);</script>
</body>
</html>