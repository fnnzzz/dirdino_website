
		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row 200% uniform">
						<section class="8u 12u$(medium) 12u$(small)">
							<header class="major">
								<h3>Оставить заявку</h3>
							</header>
							

							<div class="row uniform 50%">
								<div class="12u$">
									<input type="text" name="name" id="name" value="" placeholder="Ваше имя">
								</div>
								

								<div class="6u 12u$(4) 12u$(small)">
									<input type="email" name="email" id="email" value="" placeholder="Ваш E-Mail">
								</div>
								

								<div class="6u 12u$(4) 12u$(small)">
									<input type="text" name="phone" id="phone" value="" placeholder="Ваш телефон">
								</div>

								<div class="12u$">
									<textarea name="message" id="message" placeholder="Ваше сообщение" rows="6"></textarea>
 								</div>

 								<div class="12u$">
 									<ul class="actions">
 										<li><input type="submit" value="Отправить" class="special"></li>
 									</ul>
 								</div>

							</div>
							
						</section>
		

						<section class="4u$ 12u$(medium) 12u$(small)">
							<header class="major">
								<h3>Контакты</h3>
							</header>
							<ul class="labeled-icons">
								<li class="">
									<h4 class="icon fa-envelope"><span class="label">E-mail</span></h4>
									<a href="mailto:<?php echo get_theme_mod( 'contacts_mail' ); ?>"><?php echo get_theme_mod( 'contacts_mail' ); ?></a>
								</li>
								<li class="">
									<h4 class="icon fa-phone"><span class="label">Телефон</span></h4>
									<a href="tel:<?php echo get_theme_mod( 'contacts_phone1' ); ?>"><?php echo get_theme_mod( 'contacts_phone1' ); ?></a>
									<br>
									<a href="tel:<?php echo get_theme_mod( 'contacts_phone2' ); ?>"><?php echo get_theme_mod( 'contacts_phone2' ); ?></a>
								</li>
								<li class="">
									<h4 class="icon fa-home"><span class="label">Адрес</span></h4>
									<a target="_blank" href="https://www.google.com/maps/dir//50.416363,30.449156/@50.4163908,30.4447333,16z/data=!3m1!4b1">
										<?php echo get_theme_mod( 'contacts_adress' ); ?>
									</a>
								</li>
								<li class="">
									<h4 class="icon fa-calendar-o"><span class="label">График работы:</span></h4>
									<?php echo get_theme_mod( 'contacts_graphic' ); ?>
								</li>
								<!-- <li class="">
									<h4 class="icon fa-twitter"><span class="label">Twitter</span></h4>
									<a href="#">twitter.com/dirdino</a>
								</li>
								<li class="">
									<h4 class="icon fa-facebook"><span class="label">Facebook</span></h4>
									<a href="#">facebook.com/dirdino</a>
								</li> -->
							</ul>
						</section>
					</div>
				</div>
				<div class="copyright">
					Мастерская Дырдыно &copy; <?php echo date('Y'); ?>
				</div>
			</div>
	

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.css">

		<?php wp_footer(); ?>
		
		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/concat.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/v8.css" /><![endif]-->


	</body>
</html>