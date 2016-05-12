<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<title><?php wp_title() ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<noscript>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/skel.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/style.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/style-xlarge.css" />
		</noscript>

		<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon"> 
			
		<?php wp_head(); ?>
		
	</head>
	