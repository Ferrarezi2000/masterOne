<?php include '../../php/bancoDados/conexao.php'; ?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<meta name="twitter:widgets:theme" content="light">
	<meta property="og:title" content="Your-Title-Here" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="Your-Image-Url" />
	<meta property="og:description" content="Your-Page-Description" />
	<title>Sartre | Multipurpose HTML5 Template - Blog</title>
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
                            <a href="about-style-one.html">Empresa</a>
                        </li>
                        <li class="contains-mega-sub-menu">
                            <a href="portfolio-three-columns.html">Produtos e Serviços</a>
                        </li>
                        <li class="current">
                            <a href="blog.php">Blog</a>
                        </li>
                        <li>
                            <a href="blog.html">Contato</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog.html">Fale Conosco</a>
                                </li>
                                <li>
                                    <a href="blog-four-columns-full-width.html">Suporte</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="side-navigation-footer">
                    <ul class="social-list list-horizontal">
                        <li>
                            <a href="#">
                                <span class="icon-twitter small"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon-facebook small"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon-instagram small"></span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright no-margin-bottom">&copy; 2018 STAND BY.</p>
                </div>
            </div>
        </div>
    </aside>
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
            <header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100">
                <div class="header-inner">
                    <div class="row nav-bar">
                        <div class="column width-12 nav-bar-inner">
                            <div class="logo">
                                <div class="logo-inner">
                                    <a href="index.html">
                                        <img src="../../imagens/resume/logo-dark.png" alt="Sartre Logo" />
                                    </a>
                                    <a href="index.html">
                                        <img src="../../imagens/resume/logo.png" alt="Sartre Logo" />
                                    </a>
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
                            <nav class="navigation nav-block primary-navigation nav-right no-margin-right">
                                <ul>
                                    <li>
                                        <a href="../../index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="about-style-one.html">Empresa</a>
                                    </li>
                                    <li class="contains-mega-sub-menu">
                                        <a href="portfolio-three-columns.html">Produtos e Serviços</a>
                                    </li>
                                    <li class="current">
                                        <a href="blog.php">Blog</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Contato</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog.html">Fale Conosco</a>
                                            </li>
                                            <li>
                                                <a href="blog-four-columns-full-width.html">Suporte</a>
                                            </li>
                                        </ul>
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
									<h1 class="inline">Blog Full Width</h1>
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

                            echo'
                        <div class="column width-10 offset-1 content-inner blog-regular center">
							<article class="post">
								<div class="post-media">
									<div class="thumbnail img-scale-in" data-hover-easing="easeInOut"
                                         data-hover-speed="700" data-hover-bkg-color="#ffffff"
                                         data-hover-bkg-opacity="0.9">
											<img src="../../imagens/blog/'.$value['url'].'" alt=""/>
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
						</div>';

                        }
                        ?>

					</div>
				</div>
			</div>


			<!-- Content End -->
			
			<!-- Footer -->
			<footer class="footer">
				<div class="footer-top">
					<div class="row flex">
						<div class="column width-6">
							<div class="widget">
								<h4 class="widget-title weight-light">About</h4>
								<p><strong>Starting a new business?</strong> Then Sartre is for you!<br> This multi-purpose template offsers 8 carefully crafted concepts with two variations each, 20+ components and 8+ plugins. It also comes with a range of different headers, footers and pre-designed content blocks that can easily be swaped around to create new interesting layouts. Simple, Elegent and Powerful!<p>
							</div>
						</div>
						<div class="column width-6">
							<div class="widget">
								<h4 class="widget-title">Get Notified</h4>
								<p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
								<div class="signup-form-container">
									<form class="signup-form" action="../../php/subscribe.php" method="post" novalidate>
										<div class="row">
											<div class="column width-8">
												<div class="field-wrapper">
													<input type="email" name="email" class="form-email form-element" placeholder="Email address" tabindex="2" required>
												</div>
											</div>
											<div class="column width-4">
												<input type="submit" value="Signup" class="form-submit button border-grey bkg-hover-grey color-white color-hover-white">
											</div>
										</div>
										<input type="text" name="honeypot" class="form-honeypot form-element">
									</form>
									<div class="form-response show"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="column width-12">
							<div class="footer-bottom-inner center">
								<p class="copyright pull-left clear-float-on-mobile">
									&copy; ThemeMountain. All Rights Reserved. <a href="#">Terms & Conditions</a> | <a href="#">Cookie policy</a>
								</p>
								<ul class="social-list list-horizontal pull-right clear-float-on-mobile">
									<li><a href="#"><span class="icon-twitter small"></span></a></li>
									<li><a href="#"><span class="icon-facebook small"></span></a></li>
									<li><a href="#"><span class="icon-youtube small"></span></a></li>
									<li><a href="#"><span class="icon-vimeo small"></span></a></li>
									<li><a href="#"><span class="icon-instagram small"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End -->

		</div>
	</div>

	<!-- Js -->
	<script src="../../assets/js/timber.master.min.js"></script>
</body>
</html>