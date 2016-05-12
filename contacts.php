<?php
/*
Template Name: contacts-page
*/
?>

<?php 
	get_header(); 
?>


	<body class="landing">

		
		<?php 
			require('_navigation.php'); 
		?>
	

		<!-- Main -->
			<section id="main">
				<div class="container">
					<header class="major">
						<h2>Наши контакты</h2>
					</header>
					<div class="row 200%">
						<div class="8u 12u$(medium) 12u$(small)">
							<iframe width="100%" height="310" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.327668512495!2d30.44696731529604!3d50.41636639770195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c94b672a3e87%3A0x31fc9eab6f9ae299!2z0JzQsNGB0YLQtdGA0YHQutCw0Y8g0JTRi9GA0LTRi9C90L4!5e0!3m2!1sru!2sua!4v1460115866026" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
						</div>

							<div class="4u$ 12u$(medium) 12u$(small) contact_right_info">
								<ul class="labeled-icons contacts_page">
									<li>
										<h4 class="icon fa-envelope"><span class="label">E-mail</span></h4>
										<a href="mailto:<?php echo get_theme_mod( 'contacts_mail' ); ?>"><?php echo get_theme_mod( 'contacts_mail' ); ?></a>
									</li>
									<li>
										<h4 class="icon fa-phone"><span class="label">Телефон</span></h4>
										<a href="tel:<?php echo get_theme_mod( 'contacts_phone1' ); ?>"><?php echo get_theme_mod( 'contacts_phone1' ); ?></a>
										<br>
										<a href="tel:<?php echo get_theme_mod( 'contacts_phone2' ); ?>"><?php echo get_theme_mod( 'contacts_phone2' ); ?></a>
									</li>
									<li>
										<h4 class="icon fa-home"><span class="label">Адрес</span></h4>
											<?php echo get_theme_mod( 'contacts_adress' ); ?>
									</li>
									<li>
										<h4 class="icon fa-calendar-o"><span class="label">График работы:</span></h4>
										<?php echo get_theme_mod( 'contacts_graphic' ); ?>
									</li>
								</ul>
												
								<!-- <h5 class="follow_us_on_social">Присоединяйтесь к нам в соц.сетях</h5>
							
								<div class="social-buttons">
									<a href="#" class="social-button facebook">
										<i class="fa fa-facebook"></i></a>
							
									<a href="#" class="social-button vk">
										<i class="fa fa-vk"></i></a>	
							
									<a href="#" class="social-button skype">
										<i class="fa fa-skype"></i></a>
								</div> -->
							
							</div>


						<div class="12u form_contacts" id="contacts_form">
						
							<p>
								Заполните простую форму обратной связи и наши менеджеры свяжутся с Вами в ближайшее время.
							</p>

							<div class="row uniform 50%">
								<div class="4u 12u$(small)">
									<input type="text" name="name" id="name" value="" placeholder="Ваше имя">
								</div>
								

								<div class="4u 12u$(small)">
									<input type="email" name="email" id="email" value="" placeholder="Ваш E-Mail">
								</div>
								

								<div class="4u 12u$(small)">
									<input type="text" name="phone" id="phone" value="" placeholder="Ваш телефон">
								</div>

								<div class="12u">
									<textarea name="message" id="message" placeholder="Ваше сообщение" rows="7"></textarea>
 								</div>

 								<div class="12u$">
 									<ul class="actions footer_actions" style="text-align: center;">
 										<li><input type="submit" value="Отправить" class="special submit_contacts_form"></li>
 										<li class="footer_attach_file"> 
 											<a href="#" class="button special add-file"><span class="fa fa-plus add_file_icon"></span>Прикрепить файл</a>
											<input type="file">
 										</li>
 									</ul>
 								</div>

							</div>
							
						</div>
					</div>
				</div>
			</section>


		<a href="#feedback_modal" class="contacts_feedback_fixed_btn button special">
			Обратная связь
		</a>


		<?php 

			require_once('feedback_modal.php');

		 ?>

		<!-- Footer -->
			<div id="footer" class="-empty">
				<div class="copyright">
					Мастерская Дырдыно &copy; 2016
				</div>
			</div>
			
			
		<?php wp_footer(); ?>


		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.css">

		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/concat.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/v8.css" /><![endif]-->


		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/remodal/dist/remodal.css"></link>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/remodal/dist/remodal-default-theme.css"></link>
		<script src="<?php echo get_template_directory_uri(); ?>/bower_components/remodal/dist/remodal.min.js"></script>




	</body>
</html>