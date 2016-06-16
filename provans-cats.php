<?php
/*
Template Name: provans-cats
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
					<section>
						<div class="cats_prov row">

							<div class="6u 12u$(medium)">
								<div class="provans__block -category -main" 
									 style="background-image: url('<?php the_field('provans_subcategorypic');  ?>');">
									<h3 class="provans__block-title -newlh">
										<span class="provans__block-title"><?php the_field('provans_subcategoryname');  ?></span>
									</h3>
								</div>
							</div>
							
							<div class="6u$ 12u$(medium)">
								<div class="row">


									<?php 
										if( have_rows('provans_subcategory') ):

											$firstCounter = 0;
									
										    while ( have_rows('provans_subcategory') ) : the_row();

									?>	
												<?php  if($firstCounter < 2) : ?>

												<div class="6u">
													<div class="provans__block -category -small -top" 
														 style="background-image: url('<?php the_sub_field('provans_subc_pic'); ?>');">
														
														<h4 class="provans__block-title -small">
															<a href="<?php the_sub_field('provans_subc_link') ?>"><?php the_sub_field('provans_subc_name') ?></a>
														</h4>

													</div>

													<?php the_row(); ?>

													<div class="provans__block -category -small" 
														 style="background-image: url('<?php the_sub_field('provans_subc_pic'); ?>');">
														<h4 class="provans__block-title -small">
															<a href="<?php the_sub_field('provans_subc_link') ?>"><?php the_sub_field('provans_subc_name') ?></a>
														</h4>
													</div>
												</div>

												<?php 
													endif; 
													$firstCounter++;
												?>

									<?php
										    endwhile;

										endif;

									?>



							

								</div>
							</div>

							<div class="12u$ provans__cats-bottom">
								<div class="row 75%">
									
									<?php 
										if( have_rows('provans_subcategory') ):

											$secondCounter = 0;
									
										    while ( have_rows('provans_subcategory') ) : the_row();

									?>	
												<?php  if($secondCounter > 3) : ?>

													<div class="3u 6u(medium)">
														<div class="provans__block -category -small -top" 
															 style="background-image: url('<?php the_sub_field('provans_subc_pic'); ?>');">
															<h4 class="provans__block-title -small">
																<a href="<?php the_sub_field('provans_subc_link'); ?>"><?php the_sub_field('provans_subc_name'); ?></a>
															</h4>
														</div>
													</div>

												<?php 
													endif; 
													$secondCounter++;
												?>

									<?php
										    endwhile;
										    
										endif;

									?>
									
								</div>
							</div>

						</div>
					</section>
				</div>
			</section>


	<?php get_footer(); ?>