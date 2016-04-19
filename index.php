<?php 
	get_header(); 
?>

	<body class="landing">

		<?php 
			require('_navigation.php'); 
		?>

		<!-- Banner -->
			<section id="banner">
				<h2>Мастерская Дырдыно</h2>
				<p>МЕБЕЛЬ НА ЗАКАЗ В КИЕВЕ И РЕГИОНАХ</p>
				<ul class="actions">
					<li><a href="#" class="button special">Ознакомиться</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="container">
					<section class="feature">
						<div class="row 200%">
							<div class="8u 12u$(medium)">
								<header class="major">
									<h2>Donec nec justo eget</h2>
									<p>Aliquam commodo sed magna</p>
								</header>
								<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quisgravida id, est. Sed lectuisto. Praesent lorem ipsum dolor sit amet blandit elementum hendrerit dolor sit amet feugiat. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn more</a></li>
								</ul>
							</div>
							<div class="4u$ 12u$(medium) important(medium)">
								<span class="image fit rounded">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/pic01.jpg" alt="" />
								</span>
							</div>
						</div>
					</section>
					<section class="feature">
						<div class="row 200%">
							<div class="4u 12u$(medium)">
								<span class="image fit rounded">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/pic02.jpg" alt="" class="rounded" />
								</span>
							</div>
							<div class="8u$ 12u$(medium)">
								<header class="major">
									<h2>Aliquam blandit mauris</h2>
									<p>Vivamus nulla ante vestibulum</p>
								</header>
								<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quisgravida id, est. Sed lectuisto. Praesent lorem ipsum dolor sit amet blandit elementum hendrerit dolor sit amet feugiat. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero faucibus.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn more</a></li>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Наш Instagram</h2>
						<p>вы можете ознакомиться с последними работами и <a href="#">подписаться</a></p>
					</header>
				</div>
				<section class="carousel">
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/01.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/01.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/02.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/02.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/03.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/03.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/04.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/04.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/05.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/05.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/01.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/01.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/02.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/02.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/03.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/03.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/04.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/04.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/05.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/05.jpg" alt="" title="Lorem ipsum dolor sit amet" /></a>
					</article>
				</section>
				<div class="container">
					<ul class="actions align-center">
						<li><a href="#" class="button alt">Галерея работ</a></li>
					</ul>
				</div>
			</section>



	<?php get_footer(); ?>