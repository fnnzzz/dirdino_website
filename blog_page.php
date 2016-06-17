<?php
/*
Template Name: blog-page
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
						<div class="8u 12u$(medium)">

							<!-- Content -->
								<section id="content">

									<?php 
										require_once('_blog-post.php');
									?>

								</section>

						</div>
						<div class="4u$ 12u$(medium) cats_block">

							<!-- Sidebar -->
								<section id="sidebar">
									<section>
										<h4>Рубрики</h4>
										<ul class="blog_categories_list">
										    
											<?php

												require_once('_blog-cats.php')
											
											?>

										</ul>
										</section>
								</section>
						</div>
					</div>
				</div>
			</section>


	<?php get_footer(); ?>