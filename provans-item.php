<?php
/*
Template Name: provans-item
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
						
						<div class="6u">
							<div class="provans__item-mainblock" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_kuukhni.jpg');">
								
							</div>
						</div>

						<div class="6u">
							<h4 class="provans__item-title">Артикул: 1111</h4>
							<h4 class="provans__item-title -price">Цена: <span>4000$</span></h4>
							<h4 class="provans__item-title">Габаритные размеры: <span>2400&#10005;300&#10005;100</span></h4>
							<div class="provans__item-colorwrap">
								<h4 class="provans__item-title">Возможные цвета:</h4>
								<div class="provans__item-color" style="background-color: blue"></div>
								<div class="provans__item-color" style="background-color: red"></div>
								<div class="provans__item-color" style="background-color: violet"></div>
								<div class="provans__item-color" style="background-color: green"></div>
								<div class="provans__item-color" style="background-color: brown"></div>
								<div class="provans__item-color" style="background-color: grey"></div>
								<div class="provans__item-color" style="background-color: black"></div>

							</div>

							<!-- <br clear="all"> -->
							
							<div class="row 50% provans__item-rakurswrap">
								<div class="3u">
									<div class="provans__item-rakurs" style="background-image: url('http://placehold.it/600x300');"></div>
								</div>
								<div class="3u">
									<div class="provans__item-rakurs" style="background-image: url('http://placehold.it/600x300');"></div>
								</div>
								<div class="3u">
									<div class="provans__item-rakurs" style="background-image: url('http://placehold.it/600x300');"></div>
								</div>
								<div class="3u">
									<div class="provans__item-rakurs" style="background-image: url('http://placehold.it/600x300');"></div>
								</div>
							</div>
						</div>

					</div>

					<div class="row provans__interest">
						<h3>Также вас могут заинтересовать:</h3>
					</div>

					<div class="row 75%">
						<div class="3u">
							<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_besedki.jpg');">
								<h4 class="provans__block-title -small">
									<a href="#">Другой продукт</a>
								</h4>
							</div>
						</div>
						<div class="3u">
							<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_lstn.jpg');">
								<h4 class="provans__block-title -small">
									<a href="#">Другой продукт</a>
								</h4>
							</div>
						</div>
						<div class="3u">
							<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_kuukhni.jpg');">
								<h4 class="provans__block-title -small">
									<a href="#">Другой продукт</a>
								</h4>
							</div>
						</div>
						<div class="3u">
							<div class="provans__block -category -small -top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dist/images/provans_gost.jpg');">
								<h4 class="provans__block-title -small">
									<a href="#">Другой продукт</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</section>


	<?php get_footer(); ?>