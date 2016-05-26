<!-- LOADER -->
<div id="loader">
	<div class="spinner"></div>
</div>


<!-- Header -->
	<div id="header" class="skels-layers-fixed">
		<h1 id="logo"><a href="<?php echo home_url(); ?>">Мастерская Дырдыно</a></h1>
		<nav id="nav">
			<ul>
				<li><a href="<?php echo home_url(); ?>">Главная</a></li>
				<li><a href="<?php echo get_page_link(6); ?>">Контакты</a></li>
				<li>
					<a href="<?php echo get_page_link(19); ?>">Галерея работ</a>
					<ul>
						<li><a href="<?php echo get_page_link(19); ?>">Все работы</a></li>
						<li><a href="<?php echo get_page_link(98); ?>">Шкафы</a></li>
						<li><a href="#">Прихожие</a></li>
					</ul>
				</li>
				<li><a href="<?php echo get_page_link(146); ?>">Мебель-прованс</a></li>
				<li><a href="<?php echo get_page_link(14); ?>">Партнёрам</a></li>
				<li><a href="<?php echo get_page_link(17); ?>">Заказчикам</a></li>
				<li><a href="<?php echo get_page_link(113); ?>">Блог</a></li>
				<li>
					<a href="#"><span class="small_hide header_phone icon fa-phone"></span></a>

					<ul>
						<li><a href="tel:<?php echo get_theme_mod( 'contacts_phone1' ); ?>"><?php echo get_theme_mod( 'contacts_phone1' ); ?></a></li>
						<li><a href="tel:<?php echo get_theme_mod( 'contacts_phone2' ); ?>"><?php echo get_theme_mod( 'contacts_phone2' ); ?></a></li>
					</ul>
				</li>




				<script>
				  (function() {
				    var cx = '003313917530969506436:2zxrwmrm8da';
				    var gcse = document.createElement('script');
				    gcse.type = 'text/javascript';
				    gcse.async = true;
				    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(gcse, s);
				  })();
				</script>


				<li id="small_hide">
					<a href="#" id="searchtoggl"><i class="fa fa-search fa-lg"></i></a>
				</li>
			</ul>
		</nav>
	</div>

	  <div id="searchbar" class="clearfix">
	    <gcse:searchbox-only></gcse:searchbox-only>\
	  </div>