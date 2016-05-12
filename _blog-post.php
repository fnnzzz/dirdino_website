<?php

								
									$args = array( 'category' => $cat_id, 'posts_per_page' => 99999 );

									$myposts = get_posts( $args );
									foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

			
										<div class="row blog_block">
											<div class="4u 6u(medium) 12u$(small) blog_pic_wrap">
												


												<?php 


													$image = get_field('blog_image');
													$size = 'medium'; // (thumbnail, medium, large, full or custom size)

													if( $image ) {

														echo wp_get_attachment_image( $image, $size );

													}


												?>


											</div>		

											<div class="8u 6u(medium) 12u$(small) blog_content">
												<h3><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>

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


												<p class="blog_content">
													<?php echo get_field('blog_short_descr'); ?>
												</p>

												<a href="<?php echo get_post_permalink(); ?>" class="button special small readmore_blog" 
												style="cursor: pointer;">Подробнее</a>
											</div>
										</div>	


										<?php endforeach; 
										wp_reset_postdata();?>