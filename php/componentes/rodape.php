<?php ?>

<!-- Footer -->
			<footer class="footer">
				<div class="footer-top">
					<div class="row flex">
						<div class="column width-6">
							<div class="widget">
								<h4 class="widget-title weight-light">Empresa</h4>
								<p><strong>Starting a new business?</strong>
                                    Then Sartre is for you!<br>
                                    This multi-purpose template offsers 8 carefully crafted concepts with two
                                    variations each, 20+ components and 8+ plugins. It also comes with a range
                                    of different headers, footers and pre-designed content blocks that can easily
                                    be swaped around to create new interesting layouts. Simple, Elegent
                                    and Powerful!<p>
							</div>
						</div>
						<div class="column width-6">
							<div class="widget">
								<h4 class="widget-title">Contatos</h4>
								<p>(xxx)xxxx-xxxx <br/>
								   (xxx)xxxx-xxxx <br/>
                                    email@email.com.br
                                </p>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="column width-12">
							<div class="footer-bottom-inner center">
								<p class="copyright pull-left clear-float-on-mobile">
                                    <a href="https://www.facebook.com/thiago.ferrarezi.71"> &copy; Stand By. All Rights Reserved | 2018</a>
								</p>
								<ul class="social-list list-horizontal pull-right clear-float-on-mobile">
									<li><a href="#"><span class="icon-twitter small"></span></a></li>
									<li><a href="#"><span class="icon-facebook small"></span></a></li>
									<li><a href="#"><span class="icon-youtube small"></span></a></li>
									<li><a href="#"><span class="icon-vimeo small"></span></a></li>
									<li><a href="#"><span class="icon-instagram small"></span></a></li>
                                    <?php
                                        if ($paginaAtual === 'blog'){
                                            echo '<li><a href="../../src/administracao/login.php">
                                                       <span class="icon-user small"></span>
                                                       </a>
                                                  </li>';
                                        }
                                    ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End -->