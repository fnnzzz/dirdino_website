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
						<?php 
							if( have_rows('provans_categories') ):
							    while ( have_rows('provans_categories') ) : the_row();
						?>
									<div class="4u 6u(medium) 12u$(small)">
										<div class="provans__block" style="background-image: url('<?php the_sub_field('provans_cat_pic'); ?>');">
											<h3 class="provans__block-title">
												<a href="<?php the_sub_field('provans_cat_link'); ?>"><?php the_sub_field('provans_cat_name'); ?></a>
											</h3>
										</div>
									</div>
						<?php
							    endwhile;

							else :

							    echo '<h1 style="text-align: center">Нет записей</h1>';

							endif;

						 ?>

					</div>
				</div>
			</section>


	<?php get_footer(); ?>