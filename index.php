<?php
$paginaAtual = 'home'
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
	<link rel="shortcut icon" type="image/x-icon" href="imagens/theme-mountain-favicon.ico">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7CRoboto:300,400,500,700'
		  rel='stylesheet' type='text/css' />

	<!-- Css -->
	<link rel="stylesheet" href="assets/css/core.min.css" />
	<link rel="stylesheet" href="assets/css/skin-resume.css" />
	<link rel="stylesheet" href="assets/css/meu_css/index.css" />
	<link rel="stylesheet" href="assets/css/meu_css/fonte-master-one.css" />

	<!--[if lt IE 9]-->
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

</head>

<body class="shop home-page">

	<!-- Side Navigation Menu Celular-->
    <?php include 'php/componentes/menu-celular.php'; ?>
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
            <?php include 'php/componentes/menu-site.php'; ?>
			<!-- Header End -->

			<!-- Content -->
			<div class="content clearfix">

				<!-- Fullscreen Slider Section -->
				<section class="section-block featured-media window-height tm-slider-parallax-container">
					<div class="tm-slider-container full-width-slider" data-featured-slider data-parallax>
						<ul class="tms-slides">
							<li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#000000" 
								data-overlay-bkg-opacity="0.60">
								<div class="tms-content">
									<div class="tms-content-inner left left-on-mobile v-align-middle">
										<div class="row">
											<div class="column width-12">
												<div class="tms-content">
													<div class="tms-content-inner left left-on-mobile v-align-middle">
														<div class="row">
															<div class="column width-12 tms-perspective">
																<h1 class="tms-caption color-white weight-light mb-0 no-scale titulo"
																	data-animate-in="preset:fadeIn;duration:1000ms;delay:100ms;"
																	data-no-scale="" style="transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);
																	opacity: 1; transform-origin: 50% 50% 0px; visibility: visible;" >
																	Master One
																</h1>
																<div class="tms-caption no-scale" style="width: 100%;
																     transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; transform-origin: 50% 50% 0px; visibility: visible;" data-animate-in="preset:scaleOut;duration:1000ms;" data-no-scale="">
																	<hr class="opacity-05">
																</div>
																<h3 class="tms-caption color-grey-light weight-light mb-20 mb-mobile-20 no-scale subtitulo"
																	data-animate-in="preset:slideInDownShort;duration:1000ms;delay:1000ms;"
																	data-no-scale=""
																	style="transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1;
																	transform-origin: 50% 50% 0px; visibility: visible; color: #bbb9b6">
																	Consultoria e inteligência em negócios
																</h3>
																<div class="clear"></div>
																<ul class="tms-caption social-list list-horizontal no-margins scale" data-animate-in="preset:slideInDownShort;duration:1000ms;delay:1000ms;" style="transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; font-size: 9.1875px; line-height: 9.1875px; padding: 0px; margin: 0px; border-width: 0px; white-space: nowrap; top: 235.406px; left: 248.5px; transform-origin: 50% 50% 0px; visibility: visible;">
																	<li><a href="#" class="color-grey-light color-hover-white"><span class="icon-twitter-with-circle medium"></span></a></li>
																	<li><a href="#" class="color-grey-light"><span class="icon-facebook-with-circle medium"></span></a></li>
																	<li><a href="#" class="color-grey-light"><span class="icon-dribbble-with-circle medium"></span></a></li>
																	<li><a href="#" class="color-grey-light"><span class="icon-linkedin-with-circle medium"></span></a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<img data-src="imagens/minhas_imagens/background_index.jpg" alt="" />
							</li>
						</ul>
					</div>
				</section>
				<!-- Fullscreen Slider Section End -->

			</div>
		</div>
	</div>

	<!-- Js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
	<script src="assets/js/timber.master.min.js"></script>
	<script src="assets/js/vue.js"></script>
	<script src="assets/js/meu_js/index.js"></script>
</body>

</html>