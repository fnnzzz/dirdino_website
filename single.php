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
						<div class="12u 12u$(medium)">

							<!-- Content -->
								<section id="content">


										<?php 

											$image = get_field('blog_image');
											$size = 'full'; // (thumbnail, medium, large, full or custom size)

											if( $image ) {

												echo '<span class="image left blog__single-picwrap">'.wp_get_attachment_image( $image, $size ).'</span>';

											}

										 ?>
																				
										<span class="blog_icons -date">
											<i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date( 'd-m-Y' ); ?>
										</span>

										<span class="blog_icons -category">
											<i class="fa fa-folder-o" aria-hidden="true"></i> 
												<?php 

												$categories = get_the_category();
												$separator = ', ';
												$output = '';

												if ( ! empty( $categories ) ) {
												    foreach( $categories as $category ) {

												        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Посмотреть все статьи в категории %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
												    }

												    echo trim( $output, $separator );
												}

												?>
										</span>

										<p>
											<?php 
												echo the_content();
											 ?>
										</p>

										
								</section>

						</div>
					</div>
				</div>
			</section>


	<?php get_footer(); ?>