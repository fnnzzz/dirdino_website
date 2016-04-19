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
									<textarea name="message" id="message" placeholder="Ваше сообщение" rows="7"></textarea>
 								</div>

 								<div class="12u$">
 									<ul class="actions">
 										<li><input type="submit" value="Отправить" class="special"></li>
 									</ul>
 								</div>

							</div>
							
						</section>

						<section class="4u$ 6u$(medium) 12u$(small)">
							<header class="major">
								<h3>Контакты</h3>
							</header>
							<ul class="labeled-icons">
								<li>
									<h4 class="icon fa-envelope"><span class="label">E-mail</span></h4>
									<a href="mailto:info@dirdino.com.ua">info@dirdino.com.ua</a>
								</li>
								<li>
									<h4 class="icon fa-phone"><span class="label">Телефон</span></h4>
									<a href="tel:0444514856">(044) 451 48 56</a>
								</li>
								<li>
									<h4 class="icon fa-home"><span class="label">Адрес</span></h4>
									<a target="_blank" href="https://www.google.com/maps/dir//50.416363,30.449156/@50.4163908,30.4447333,16z/data=!3m1!4b1">
										03151, г. Киев, Воздухофло́тский просп., 72, офис № 42
									</a>
								</li>
								<li>
									<h4 class="icon fa-calendar-o"><span class="label">График работы:</span></h4>
									Работаем с 9:00 до 18:00 (суббота и воскресенье выходные)
								</li>
								<li>
									<h4 class="icon fa-twitter"><span class="label">Twitter</span></h4>
									<a href="#">twitter.com/dirdino</a>
								</li>
								<li>
									<h4 class="icon fa-facebook"><span class="label">Facebook</span></h4>
									<a href="#">facebook.com/dirdino</a>
								</li>
							</ul>
						</section>
					</div>
				</div>
				<div class="copyright">
					Мастерская Дырдыно &copy; 2016
				</div>
			</div>
		
		<div id="loader"><!-- ama preloader--></div>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.css">

		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/concat.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/v8.css" /><![endif]-->

		<?php wp_footer(); ?>

	</body>
</html>