<?php
$paginaAtual = 'contato'
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
    <meta name="twitter:widgets:theme" content="light">
    <meta property="og:title" content="Master One"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Consultoria e inteligência em negócios"/>
    <title>Master One</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../imagens/theme-mountain-favicon.ico">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet'
          type='text/css'>

    <!-- Css -->
    <link rel="stylesheet" href="../../assets/css/core.min.css"/>
    <link rel="stylesheet" href="../../assets/css/skin.css"/>
    <link rel="stylesheet" href="../../assets/css/meu_css/contato.css"/>
    <link rel="stylesheet" href="../../assets/css/meu_css/base.css"/>

</head>
<body class="shop">

<!-- Menu celular -->
<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
    <div class="side-navigation-scroll-pane">
        <div class="side-navigation-inner">
            <div class="side-navigation-header">
                <div class="navigation-hide side-nav-hide">
                    <a href="#">
                        <span class="icon-cancel medium"></span>
                    </a>
                </div>
            </div>
            <nav class="side-navigation">
                <ul>
                    <li>
                        <a href="../../index.php">Home</a>
                    </li>
                    <li>
                        <a href="./empresa.php">Empresa</a>
                    </li>
                    <li>
                        <a href="./servico.php">Produtos e Serviços</a>
                    </li>
                    <li>
                        <a href="./blog.php">Blog</a>
                    </li>
                    <li class="current">
                        <a href="./contato.php">Contato</a>
                    </li>
                </ul>
            </nav>

            <div class="side-navigation-footer">
                <p class="copyright no-margin-bottom">&copy; 2018 STAND BY.</p>
            </div>
        </div>
    </div>
</aside>
<!-- Fim Menu celular -->

<div class="wrapper reveal-side-navigation">
    <div class="wrapper-inner">

        <!-- Menu Site -->
        <header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100"
                data-compact-threshold="100">
            <div class="header-inner">
                <div class="row nav-bar">
                    <div class="column width-12 nav-bar-inner">
                        <div class="logo">
                            <div class="logo-inner">
                                <a href="../../index.php"><img
                                            src="../../imagens/minhas_imagens/logo-menu/logo-dark-one.png"
                                            alt="Logo"/></a>
                                <a href="../../index.php"><img
                                            src="../../imagens/minhas_imagens/logo-menu/logo-one.png"
                                            alt="Logo"/></a>
                            </div>
                        </div>
                        <nav class="navigation nav-block secondary-navigation nav-right">
                            <ul>
                                <li class="aux-navigation hide">
                                    <!-- Aux Navigation -->
                                    <a href="#" class="navigation-show side-nav-show nav-icon">
                                        <span class="icon-menu"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="navigation nav-block primary-navigation nav-right">
                            <ul>
                                <li>
                                    <a href="../../index.php">Home</a>
                                </li>
                                <li>
                                    <a href="./empresa.php">Empresa</a>
                                </li>
                                <li>
                                    <a href="./servico.php">Produtos e Serviços</a>
                                </li>
                                <li>
                                    <a href="./blog.php">Blog</a>
                                </li>
                                <li class="current">
                                    <a href="./contato.php">Contato</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Menu site -->

        <!-- Corpo -->
        <div class="content clearfix">

            <!-- Intro -->
            <section class="section-block featured-media page-intro tm-slider-parallax-container">
                <div class="tm-slider-container full-width-slider" data-parallax data-animation="slide"
                     data-scale-under="1140">
                    <ul class="tms-slides">
                        <li class="tms-slide" data-image data-force-fit>
                            <div class="tms-content">
                                <div class="tms-content-inner left">
                                    <div class="row">
                                        <div class="column width-12">
                                            <h1 class="tms-caption color-white inline"
                                                data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;"
                                                data-no-scale>
                                                Contato
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img data-src="../../imagens/minhas_imagens/contato/contato-capa.jpg" data-retina
                                 src="../../imagens/blank.png" alt=""/>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- Intro Fim -->

            <!-- Formulario Contato -->
            <section class="section-block replicable-content contact-2 textura">
                <div class="row">
                    <div class="column width-4">
                        <h2 class="mb-30">Bem vindo</h2>
                        <div class="row">
                            <div class="column width-10">
                                <p>Entre em contato conosco, será um prazer atende-lós.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column width-8 left">
                        <div class="contact-form-container">
                            <form action="../../php/email.php" name="form_contato" method="post">
                                <div class="row">

                                    <div class="column width-6">
                                        <input type="text" name="nome" class="form-fname form-element large"
                                               placeholder="Nome*" tabindex="1" required>
                                    </div>

                                    <div class="column width-6">
                                        <input type="text" name="sobrenome" class="form-lname form-element large"
                                               placeholder="Sobrenome*" tabindex="2" required>
                                    </div>

                                    <div class="column width-12">
                                        <input type="text" name="assunto" class="form-website form-element large"
                                               placeholder="Assunto*" tabindex="4" required>
                                    </div>

                                    <div class="column width-12">
                                        <input type="email" name="email" class="form-email form-element large"
                                               placeholder="Email*" tabindex="3" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="column width-12">
                                        <div class="field-wrapper">

                                            <div>
                                                    <textarea name="mensagem" class="form-message form-element large"
                                                              placeholder="Mensagem*" tabindex="7" required=></textarea>
                                            </div>

                                            <div class="column width-12">
                                                <div class="field-wrapper pt-10 pb-10">
                                                    <input id="checkbox-1" class="form-element checkbox"
                                                           name="checkbox-1"
                                                           type="checkbox" required>
                                                    <label for="checkbox-1" class="checkbox-label">Não sou
                                                        robô.</label>
                                                </div>
                                            </div>

                                            <div class="column width-12">
                                                <button type="submit" class="form-submit button medium bkg-theme
                                                    botaoPrincipal bkg-hover-theme color-white color-hover-white">
                                                    Enviar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fim Formulario Contato -->
        </div>
        <!-- Corpo Fim -->

        <!-- Footer -->
        <?php include '../../php/componentes/rodape.php' ?>
        <!-- Footer End -->

    </div>
</div>

<!-- Js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../assets/js/timber.master.min.js"></script>
</body>
</html>