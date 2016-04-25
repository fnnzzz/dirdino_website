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
					<li><a href="#learn" class="button special read_scroll">Ознакомиться</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="container">
					<section class="feature">
						<div class="row 200%">
							<div class="8u 12u$(medium)">
								<header class="major">
									<h2><?php echo get_theme_mod( 'main_title_1' ); ?></h2>
									<p><?php echo get_theme_mod( 'main_subtitle_1' ); ?></p>
								</header>
								<p><?php echo get_theme_mod( 'main_descr_1' ); ?></p>
								<ul class="actions">
									<li><a href="<?php echo get_theme_mod( 'main_link_1' ); ?>" class="button alt"><?php echo get_theme_mod( 'main_textlink_1' ); ?></a></li>
								</ul>
							</div>
							<div class="4u$ 12u$(medium) important(medium)">
								<span class="image fit rounded">
									<img src="<?php echo get_theme_mod( 'main_pic_1' ); ?>" alt="Наши достижения" />
								</span>
							</div>
						</div>
					</section>
					<section class="feature">
						<div class="row 200%">
							<div class="4u 12u$(medium)">
								<span class="image fit rounded">
									<img src="<?php echo get_theme_mod( 'main_pic_2' ); ?>" alt="Наши достижения" class="rounded" />
								</span>
							</div>
							<div class="8u$ 12u$(medium)">
								<header class="major">
									<h2><?php echo get_theme_mod( 'main_title_2' ); ?></h2>
									<p><?php echo get_theme_mod( 'main_subtitle_2' ); ?></p>
								</header>
								<p><?php echo get_theme_mod( 'main_descr_2' ); ?></p>
								<ul class="actions">
									<li><a href="<?php echo get_theme_mod( 'main_link_2' ); ?>" class="button alt"><?php echo get_theme_mod( 'main_textlink_2' ); ?></a></li>
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
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/01.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/01.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/02.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/02.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/03.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/03.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/04.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/04.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/05.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/05.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/01.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/01.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/02.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/02.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/03.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/03.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/04.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/04.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/05.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/05.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
				</section>
				<div class="container">
					<ul class="actions align-center">
						<li><a href="<?php echo get_page_link(19); ?>" class="button alt">Галерея работ</a></li>
					</ul>
				</div>
			</section>



	<?php get_footer(); ?>