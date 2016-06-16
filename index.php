<?php 
	get_header(); 
?>

	<body class="landing">

		<?php 
			require('_navigation.php'); 
		?>

		<!-- Banner -->
			<section id="banner" style="background-image: url('<?php echo get_theme_mod( 'main_banner_pic' ); ?>');">
				<img class="banner_logo" src="<?php echo get_theme_mod( 'main_banner_logo_pic' ); ?>" alt="Майстерня Дирдино">
				<img class="banner_descr" src="<?php echo get_theme_mod( 'main_banner_descr_pic' ); ?>" alt="Мебель на заказ в Киеве и регионах">
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
					<!-- <section class="feature">
						<div class="row 200%">
							<div class="8u 12u$(medium)">
								<header class="major">
									<h2><?php echo get_theme_mod( 'main_title_3' ); ?></h2>
									<p><?php echo get_theme_mod( 'main_subtitle_3' ); ?></p>
								</header>
								<p><?php echo get_theme_mod( 'main_descr_3' ); ?></p>
								<ul class="actions">
									<li><a href="<?php echo get_theme_mod( 'main_link_3' ); ?>" class="button alt"><?php echo get_theme_mod( 'main_textlink_3' ); ?></a></li>
								</ul>
							</div>
							<div class="4u$ 12u$(medium) important(medium)">
								<span class="image fit rounded">
									<img src="<?php echo get_theme_mod( 'main_pic_1' ); ?>" alt="Наши достижения" />
								</span>
							</div>
						</div>
					</section> -->
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Наши последние работы</h2>
					</header>
					<!-- <h4>следите за нами на <a href="<?php echo get_theme_mod( 'social_inst' ); ?>">Instagram</a></h4> -->
				</div>

				<section class="carousel" id="insta_mount">
					<article>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/fulls/01.jpg" class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/thumbs/01.jpg" alt="" title="Дырдыно - мебель из дерева" /></a>
					</article>
				</section>

				<div class="container">
					<ul class="actions align-center">
						<li><a href="<?php echo get_page_link(19); ?>" class="button alt">Галерея работ</a></li>
					</ul>
				</div>
			</section>



	<?php get_footer(); ?>
		

	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/instafeed.js/instafeed.min.js"></script>