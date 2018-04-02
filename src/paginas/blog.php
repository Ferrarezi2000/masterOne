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

	<!--[if lt IE 9]-->
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

</head>
<body class="shop blog">

	<!-- Side Navigation Menu -->
    <?php include '../../php/componentes/menu-celular.php'; ?>
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

            <!-- Header -->
            <?php include '../../php/componentes/menu-site.php'; ?>
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