<?php
include '../../php/bancoDados/todos-posts.php';
$paginaAtual = 'blog'
?>

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
	<link rel="shortcut icon" type="image/x-icon" href="../../imagens/theme-mountain-favicon.ico">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="../../assets/css/core.min.css" />
	<link rel="stylesheet" href="../../assets/css/skin.css" />

</head>
<body class="shop blog">

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
                            <a href="#">Empresa</a>
                        </li>
                        <li>
                            <a href="#">Produtos e Serviços</a>
                        </li>
                        <li class="current">
                            <a href="./blog.php">Blog</a>
                        </li>
                        <li>
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
	<!-- Side Navigation Menu End -->

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
                                    <a href="#"><img src="../../imagens/minhas_imagens/logo-menu/logo-dark-one.png" alt="Logo" /></a>
                                    <a href="#"><img src="../../imagens/minhas_imagens/logo-menu/logo-one.png" alt="Logo" /></a>
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
                                        <a href="#">Empresa</a>
                                    </li>
                                    <li>
                                        <a href="#">Produtos e Serviços</a>
                                    </li>
                                    <li class="current">
                                        <a href="./blog.php">Blog</a>
                                    </li>
                                    <li>
                                        <a href="./contato.php">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
			<!-- Header End -->

			<!-- Content -->
			<div class="content clearfix">

				<!-- Intro Title Section 2 -->
				<div class="section-block intro-title-2 intro-title-2-4">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner center">
									<h1 class="inline">Blog Master One</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Intro Title Section 2 End -->

                <div class="section-block clearfix no-padding-bottom">
                    <div class="row">

                        <!-- Content Inner -->

                        <?php

                        foreach($dados as $value){

                            if ($value['imagem'] !== 'padrao') {
                                echo'
                                    <div class="column width-10 offset-1 content-inner blog-regular center">
                                        <article class="post">
                                            <div class="post-media">
                                                <div class="thumbnail img-scale-in" data-hover-easing="easeInOut"
                                                     data-hover-speed="700" data-hover-bkg-color="#ffffff"
                                                     data-hover-bkg-opacity="0.9">
                                                        <img src="../../imagens/minhas_imagens/blog/post/'.$value['imagem'].'" alt=""/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <h2 class="post-title">'.$value['titulo'].'</h2>
                                                <div class="post-info">
                                                    <span class="post-autor">'.$value['data'].'</span>
                                                </div>
                                                <div class="row">
                                                    <div class="column width-10 offset-1">
                                                        <p>'.$value['texto'].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <hr>';
                            } else {
                                echo'
                                    <div class="column width-10 offset-1 content-inner blog-regular center">
                                        <article class="post">
                                            <div class="post-media">
                                            </div>
                                            <div class="post-content">
                                                <h2 class="post-title">'.$value['titulo'].'</h2>
                                                <div class="post-info">
                                                    <span class="post-autor">'.$value['data'].'</span>
                                                </div>
                                                <div class="row">
                                                    <div class="column width-10 offset-1">
                                                        <p>'.$value['texto'].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <hr>';
                                    }
                        }; ?>


                    </div>
                </div>
				
			</div>
			<!-- Content End -->
			
			<!-- Footer -->
			<?php include '../../php/componentes/rodape.php'?>
			<!-- Footer End -->

		</div>
	</div>

	<!-- Js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../../assets/js/timber.master.min.js"></script>
</body>
</html>