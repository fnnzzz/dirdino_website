
		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row 200% uniform">
						<section class="8u 12u$(medium) 12u$(small)">
							<header class="major">
								<h3>Оставить заявку</h3>
							</header>
							
							
							<?php echo do_shortcode( '[contact-form-7 id="2597" title="Footer Contact-Form"]' ); ?>
							
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
								<li class="footer_social">
									<h5>Следите за нами в соц.сетях:</h5>
									<a target="_blank" href="<?php echo get_theme_mod( 'social_inst' ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/inst_icon.png" alt="Instagram">
									</a>
									<a target="_blank" href="<?php echo get_theme_mod( 'social_fb' ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fb_icon.png" alt="Facebook">
									</a>
									<a target="_blank" href="<?php echo get_theme_mod( 'social_vk' ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/vk_icon.png" alt="VK">
									</a>
									<a target="_blank" href="<?php echo get_theme_mod( 'social_ok' ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/ok_icon.png" alt="Odnoklassniki">
									</a>
								</li>
							</ul>
						</section>
					</div>
				</div>
				<div class="copyright">
					Мастерская Дырдыно &copy; <?php echo date('Y'); ?>
				</div>
			</div>
	
	
		
		<?php require_once('feedback_modal.php'); ?>

		<div class="feedback">
			<i data-remodal-target="feedback_modal" class="icon fa fa-phone"></i>
		</div>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.css">

		<?php wp_footer(); ?>	

		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/concat.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/v8.css" /><![endif]-->


		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/libs/remodal/dist/remodal.min.css"></link>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/libs/remodal/dist/remodal-default-theme.min.css"></link>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/libs/remodal/dist/remodal.min.js"></script>

		

	</body>
</html>