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
									<div class="row">


										<div class="4u 6u(medium) 12u$(small) blog_pic_wrap">
											<img src="http://placehold.it/600x500" alt="" class="blog_right_pic">
										</div>		

										<div class="8u 6u(medium) 12u$(small)">
											<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>

												<span class="blog_icons -date">
													<i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2016
												</span>

												<span class="blog_icons -category">
													<i class="fa fa-folder-o" aria-hidden="true"></i> <a href="#">Шкафы</a>
												</span>


											<p class="blog_content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, eligendi.
											</p>

											<a class="button special small" 
											style="cursor: pointer;">Подробнее</a>
										</div>
									</div>
			
								
								</section>

						</div>
						<div class="4u$ 12u$(medium)">

							<!-- Sidebar -->
								<section id="sidebar">
									<section>
										<h4>Рубрики</h4>
										<ul class="blog_categories_list">
											<li><a href="#">Шкафы</a></li>
											<li><a href="#">Кухни</a></li>
											<li><a href="#">Прихожие</a></li>
											<li><a href="#">Другие изделия</a></li>
										</ul>
									</section>
								</section>

						</div>
					</div>
				</div>
			</section>


	<?php get_footer(); ?>