<?php 


	$categories = get_categories();
	echo '<li><a href="'.get_page_link(113).'">Все записи</a></li>';
	foreach ($categories as $cat) {
		echo '<li><a href="'.esc_url( get_category_link( $cat->term_id ) ).'">'.$cat->cat_name.'</a></li>';
	}



 ?>