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


	<script type="text/javascript">		
		var provansColors = {
			array: [
				{ 
					hex: "#B0171F",
					pic1: "https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_1&w=600&h=300",
					pic2: "https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_2&w=600&h=300",
					pic3: "https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_3&w=600&h=300",
					pic4: "https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_4&w=600&h=300",
					pic5: "https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_5&w=600&h=300",
				},
				{ 
					hex: "#0000ff",
					pic1: "https://placeholdit.imgix.net/~text?txtsize=60&bg=0000ff&txt=kartinka_1&w=600&h=300",
					pic2: "https://placeholdit.imgix.net/~text?txtsize=60&bg=0000ff&txt=kartinka_2&w=600&h=300",
					pic3: "https://placeholdit.imgix.net/~text?txtsize=60&bg=0000ff&txt=kartinka_3&w=600&h=300",
					pic4: "https://placeholdit.imgix.net/~text?txtsize=60&bg=0000ff&txt=kartinka_4&w=600&h=300",
					pic5: "https://placeholdit.imgix.net/~text?txtsize=60&bg=0000ff&txt=kartinka_5&w=600&h=300",
				},
				{ 
					hex: "#00ff00",
					pic1: "https://placeholdit.imgix.net/~text?txtsize=60&bg=00ff00&txt=kartinka_1&w=600&h=300",
					pic2: "https://placeholdit.imgix.net/~text?txtsize=60&bg=00ff00&txt=kartinka_2&w=600&h=300",
					pic3: "https://placeholdit.imgix.net/~text?txtsize=60&bg=00ff00&txt=kartinka_3&w=600&h=300",
					pic4: "https://placeholdit.imgix.net/~text?txtsize=60&bg=00ff00&txt=kartinka_4&w=600&h=300",
					pic5: "https://placeholdit.imgix.net/~text?txtsize=60&bg=00ff00&txt=kartinka_5&w=600&h=300",
				},
				{ 
					hex: "#FFFF00",
					pic1: "https://placeholdit.imgix.net/~text?txtsize=60&bg=FFFF00&txt=kartinka_1&w=600&h=300",
					pic2: "https://placeholdit.imgix.net/~text?txtsize=60&bg=FFFF00&txt=kartinka_2&w=600&h=300",
					pic3: "https://placeholdit.imgix.net/~text?txtsize=60&bg=FFFF00&txt=kartinka_3&w=600&h=300",
					pic4: "https://placeholdit.imgix.net/~text?txtsize=60&bg=FFFF00&txt=kartinka_4&w=600&h=300",
					pic5: "https://placeholdit.imgix.net/~text?txtsize=60&bg=FFFF00&txt=kartinka_5&w=600&h=300",
				},
				{ 
					hex: "#8a2be2",
					pic1: "https://placeholdit.imgix.net/~text?txtsize=60&bg=8a2be2&txt=kartinka_1&w=600&h=300",
					pic2: "https://placeholdit.imgix.net/~text?txtsize=60&bg=8a2be2&txt=kartinka_2&w=600&h=300",
					pic3: "https://placeholdit.imgix.net/~text?txtsize=60&bg=8a2be2&txt=kartinka_3&w=600&h=300",
					pic4: "https://placeholdit.imgix.net/~text?txtsize=60&bg=8a2be2&txt=kartinka_4&w=600&h=300",
					pic5: "https://placeholdit.imgix.net/~text?txtsize=60&bg=8a2be2&txt=kartinka_5&w=600&h=300",
				},
				{ 
					hex: "#f4a460",
					pic1: "https://placeholdit.imgix.net/~text?txtsize=60&bg=f4a460&txt=kartinka_1&w=600&h=300",
					pic2: "https://placeholdit.imgix.net/~text?txtsize=60&bg=f4a460&txt=kartinka_2&w=600&h=300",
					pic3: "https://placeholdit.imgix.net/~text?txtsize=60&bg=f4a460&txt=kartinka_3&w=600&h=300",
					pic4: "https://placeholdit.imgix.net/~text?txtsize=60&bg=f4a460&txt=kartinka_4&w=600&h=300",
					pic5: "https://placeholdit.imgix.net/~text?txtsize=60&bg=f4a460&txt=kartinka_5&w=600&h=300",
				},
			]
		}
	</script>


	<!-- Main -->
			<section id="main">
				<div class="container">
					<header class="major">
						<h2><?php the_title(); ?></h2>
					</header>
					<div class="row uniform 200%">
						
						<div class="6u">
							<div class="provans__item-mainblock provanscolorpic -pic1" 
							style="background-image: url('https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_1&w=600&h=300');">
								
							</div>
						</div>

						<div class="6u">
							<h4 class="provans__item-title">Артикул: 1111</h4>
							<h4 class="provans__item-title -price">Цена: <span>4000$</span></h4>
							<h4 class="provans__item-title">Габаритные размеры: <span>2400&#10005;300&#10005;100</span></h4>
							<div class="provans__item-colorwrap">
								<h4 class="provans__item-title">Возможные цвета:</h4>
								<div class="provans__item-color" data-colorid="0" style="background-color: #B0171F"></div>
								<div class="provans__item-color" data-colorid="1" style="background-color: #0000ff"></div>
								<div class="provans__item-color" data-colorid="2" style="background-color: #00ff00"></div>
								<div class="provans__item-color" data-colorid="3" style="background-color: #FFFF00"></div>
								<div class="provans__item-color" data-colorid="4" style="background-color: #8a2be2"></div>
								<div class="provans__item-color" data-colorid="5" style="background-color: #f4a460"></div>

							</div>

							<!-- <br clear="all"> -->
							
							<div class="row 50% provans__item-rakurswrap">
								<div class="3u">
									<div class="provans__item-rakurs provanscolorpic -pic2" 
									     style="background-image: url('https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_2&w=600&h=300');">
     	
									</div>
								</div>
								<div class="3u">
									<div class="provans__item-rakurs provanscolorpic -pic3" 
									     style="background-image: url('https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_3&w=600&h=300');">
     	
									</div>
								</div>
								<div class="3u">
									<div class="provans__item-rakurs provanscolorpic -pic4" 
									     style="background-image: url('https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_4&w=600&h=300');">
     	
									</div>
								</div>
								<div class="3u">
									<div class="provans__item-rakurs provanscolorpic -pic5" 
									     style="background-image: url('https://placeholdit.imgix.net/~text?txtsize=60&bg=B0171F&txt=kartinka_5&w=600&h=300');">
     	
									</div>
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