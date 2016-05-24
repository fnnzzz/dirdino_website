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
						<h2>Мебель Прованс — шкафы</h2>
					</header>
					<section>
						<div class="cats_prov row">

							<div class="6u">
								<div class="provans__block -category -main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_shkafy.jpg');">
									<h3 class="provans__block-title">
										<span>Кухни</span>
									</h3>
								</div>
							</div>
							
							<div class="6u$">
								<div class="row">
									<div class="6u">
										<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_kuukhni.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Кухня #1</a>
											</h3>
										</div>
										<div class="provans__block -category -small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_prikh.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Кухня #2</a>
											</h3>
										</div>
									</div>
									
									<div class="6u">
										<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_lstn.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Кухня #3</a>
											</h3>
										</div>
										<div class="provans__block -category -small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_gost.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Кухня #4</a>
											</h3>
										</div>
									</div>

								</div>
							</div>

							<div class="12u$ provans__cats-bottom">
								<div class="row 75%">
									<div class="3u">
										<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_besedki.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Еще кухня</a>
											</h3>
										</div>
									</div>
									<div class="3u">
										<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_lstn.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Еще кухня</a>
											</h3>
										</div>
									</div>
									<div class="3u">
										<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_kuukhni.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Еще кухня</a>
											</h3>
										</div>
									</div>
									<div class="3u">
										<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_gost.jpg');">
											<h3 class="provans__block-title -small">
												<a href="<?php echo get_page_link(153); ?>">Еще кухня</a>
											</h3>
										</div>
									</div>

									<?php 

										// // check if the repeater field has rows of data
										// if( have_rows('provans_subcategory') ):

										//  	// loop through the rows of data
										//     while ( have_rows('provans_subcategory') ) : the_row();

										//         // display a sub field value
										//         the_sub_field('provans_subc_name');

										//     endwhile;

										// else :

										//     // no rows found

										// endif;


									 ?>
								</div>
							</div>

						</div>
					</section>
				</div>
			</section>


	<?php get_footer(); ?>