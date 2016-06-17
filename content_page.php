<?php
/*
Template Name: content-page
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
					<div class="row 200%">
						<div class="12u">							
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>


	<?php get_footer(); ?>