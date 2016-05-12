<?php
/*
Template Name: provans-all
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
						<h2><?php the_title(); ?></h2>
					</header>
					<div class="row uniform 200%">
						<div class="4u 6u(medium) 12u$(small)">
							<div class="provans__block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_shkafy.jpg');">
								<h3 class="provans__block-title">
									<a href="<?php echo get_page_link(149); ?>">Шкафы</a>
								</h3>
							</div>
						</div>
						<div class="4u 6u(medium) 12u$(small)">
							<div class="provans__block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_kuukhni.jpg');">
								<h3 class="provans__block-title">
									<a href="<?php echo get_page_link(149); ?>">Кухни</a>
								</h3>
							</div>
						</div>
						<div class="4u 6u(medium) 12u$(small)">
							<div class="provans__block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_prikh.jpg');">
								<h3 class="provans__block-title">
									<a href="<?php echo get_page_link(149); ?>">Прихожие</a>
								</h3>
							</div>
						</div>
						<div class="4u 6u(medium) 12u$(small)">
							<div class="provans__block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_besedki.jpg');">
								<h3 class="provans__block-title">
									<a href="<?php echo get_page_link(149); ?>">Беседки</a>
								</h3>
							</div>
						</div>
						<div class="4u 6u(medium) 12u$(small)">
							<div class="provans__block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_lstn.jpg');">
								<h3 class="provans__block-title">
									<a href="<?php echo get_page_link(149); ?>">Лестницы</a>
								</h3>
							</div>
						</div>
						<div class="4u 6u(medium) 12u$(small)">
							<div class="provans__block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_gost.jpg');">
								<h3 class="provans__block-title">
									<a href="<?php echo get_page_link(149); ?>">Гостинные</a>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</section>


	<?php get_footer(); ?>