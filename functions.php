<?php 
show_admin_bar(false);


function mytheme_customize_register( $wp_customize ) {



		$wp_customize->add_setting(
			'main_banner_pic',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'main_banner_pic', 
				array(
				    'label'      => 'Фоновая картинка баннера',
				    'section'    => 'mainpage_banner', 
				    'settings'   => 'main_banner_pic' 
				)
			)
		);


		$wp_customize->add_setting(
			'main_banner_logo_pic',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'main_banner_logo_pic', 
				array(
				    'label'      => 'Логотип Дырдыно в баннере',
				    'section'    => 'mainpage_banner', 
				    'settings'   => 'main_banner_logo_pic' 
				)
			)
		);


		$wp_customize->add_setting(
			'main_banner_descr_pic',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'main_banner_descr_pic', 
				array(
				    'label'      => 'Логотип с описанием в баннере',
				    'section'    => 'mainpage_banner', 
				    'settings'   => 'main_banner_descr_pic' 
				)
			)
		);





		$wp_customize->add_setting(
			'main_title_1',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_title_1', 
				array(
				    'label'      => 'Заголовок #1',
				    'section'    => 'mainpage_benefit_section1', 
				    'settings'   => 'main_title_1' 
				)
		);



		$wp_customize->add_setting(
			'main_subtitle_1',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_subtitle_1', 
				array(
				    'label'      => 'Подзаголовок #1',
				    'section'    => 'mainpage_benefit_section1', 
				    'settings'   => 'main_subtitle_1' 
				)
		);



		$wp_customize->add_setting(
			'main_descr_1',
			array(
				'default'     => ''
			)
		);

		$wp_customize->add_control(
				'main_descr_1', 
				array(
				    'label'      => 'Описание #1',
				    'section'    => 'mainpage_benefit_section1', 
				    'settings'   => 'main_descr_1' 
				)
		);


		$wp_customize->add_setting(
			'main_link_1',
			array(
				'default'     => '#'
			)
		);
		
		$wp_customize->add_control(
				'main_link_1', 
				array(
				    'label'      => 'Ссылка #1',
				    'section'    => 'mainpage_benefit_section1', 
				    'settings'   => 'main_link_1' 
				)
		);



		$wp_customize->add_setting(
			'main_textlink_1',
			array(
				'default'     => 'Ознакомиться'
			)
		);
		
		$wp_customize->add_control(
				'main_textlink_1', 
				array(
				    'label'      => 'Текст ссылки #1',
				    'section'    => 'mainpage_benefit_section1', 
				    'settings'   => 'main_textlink_1' 
				)
		);


		$wp_customize->add_setting(
			'main_pic_1',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'main_pic_1', 
				array(
				    'label'      => 'Картинка #1',
				    'section'    => 'mainpage_benefit_section1', 
				    'settings'   => 'main_pic_1' 
				)
			)
		);



		// -----------------------------------------



		$wp_customize->add_setting(
			'main_title_2',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_title_2', 
				array(
				    'label'      => 'Заголовок #2',
				    'section'    => 'mainpage_benefit_section2', 
				    'settings'   => 'main_title_2' 
				)
		);



		$wp_customize->add_setting(
			'main_subtitle_2',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_subtitle_2', 
				array(
				    'label'      => 'Подзаголовок #2',
				    'section'    => 'mainpage_benefit_section2', 
				    'settings'   => 'main_subtitle_2' 
				)
		);



		$wp_customize->add_setting(
			'main_descr_2',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_descr_2', 
				array(
				    'label'      => 'Описание #2',
				    'section'    => 'mainpage_benefit_section2', 
				    'settings'   => 'main_descr_2' 
				)
		);



		$wp_customize->add_setting(
			'main_link_2',
			array(
				'default'     => '#'
			)
		);
		
		$wp_customize->add_control(
				'main_link_2', 
				array(
				    'label'      => 'Ссылка #2',
				    'section'    => 'mainpage_benefit_section2', 
				    'settings'   => 'main_link_2' 
				)
		);



		$wp_customize->add_setting(
			'main_textlink_2',
			array(
				'default'     => 'Ознакомиться'
			)
		);
		
		$wp_customize->add_control(
				'main_textlink_2', 
				array(
				    'label'      => 'Текст ссылки #2',
				    'section'    => 'mainpage_benefit_section2', 
				    'settings'   => 'main_textlink_2' 
				)
		);



		$wp_customize->add_setting(
			'main_pic_2',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'main_pic_2', 
				array(
				    'label'      => 'Картинка #2',
				    'section'    => 'mainpage_benefit_section2', 
				    'settings'   => 'main_pic_2' 
				)
			)
		);


		// ------------------------



		$wp_customize->add_setting(
			'main_title_3',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_title_3', 
				array(
				    'label'      => 'Заголовок #3',
				    'section'    => 'mainpage_benefit_section3', 
				    'settings'   => 'main_title_3' 
				)
		);



		$wp_customize->add_setting(
			'main_subtitle_3',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_subtitle_3', 
				array(
				    'label'      => 'Подзаголовок #3',
				    'section'    => 'mainpage_benefit_section3', 
				    'settings'   => 'main_subtitle_3' 
				)
		);



		$wp_customize->add_setting(
			'main_descr_3',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
				'main_descr_3', 
				array(
				    'label'      => 'Описание #3',
				    'section'    => 'mainpage_benefit_section3', 
				    'settings'   => 'main_descr_3' 
				)
		);


		$wp_customize->add_setting(
			'main_link_3',
			array(
				'default'     => '#'
			)
		);
		
		$wp_customize->add_control(
				'main_link_3', 
				array(
				    'label'      => 'Ссылка #3',
				    'section'    => 'mainpage_benefit_section3', 
				    'settings'   => 'main_link_3' 
				)
		);



		$wp_customize->add_setting(
			'main_textlink_3',
			array(
				'default'     => 'Ознакомиться'
			)
		);
		
		$wp_customize->add_control(
				'main_textlink_3', 
				array(
				    'label'      => 'Текст ссылки #3',
				    'section'    => 'mainpage_benefit_section3', 
				    'settings'   => 'main_textlink_3' 
				)
		);




		$wp_customize->add_setting(
			'main_pic_3',
			array(
				'default'     => ''
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'main_pic_3', 
				array(
				    'label'      => 'Картинка #3',
				    'section'    => 'mainpage_benefit_section3', 
				    'settings'   => 'main_pic_3' 
				)
			)
		);


		// ------------------------


		$wp_customize->add_setting(
			'contacts_mail',
			array(
				'default'     => 'info@dirdino.com.ua'
			)
		);
		
		$wp_customize->add_control(
				'contacts_mail', 
				array(
				    'label'      => 'Почта',
				    'section'    => 'contacts_section', 
				    'settings'   => 'contacts_mail' 
				)
		);



		$wp_customize->add_setting(
			'contacts_phone1',
			array(
				'default'     => '(093) 000 79 66'
			)
		);
		
		$wp_customize->add_control(
				'contacts_phone1', 
				array(
				    'label'      => 'Телефон #1',
				    'section'    => 'contacts_section', 
				    'settings'   => 'contacts_phone1' 
				)
		);


		$wp_customize->add_setting(
			'contacts_phone2',
			array(
				'default'     => '(044) 451 48 56'
			)
		);
		
		$wp_customize->add_control(
				'contacts_phone2', 
				array(
				    'label'      => 'Телефон #1',
				    'section'    => 'contacts_section', 
				    'settings'   => 'contacts_phone2' 
				)
		);



		$wp_customize->add_setting(
			'contacts_adress',
			array(
				'default'     => '03151, г. Киев, Воздухофло́тский просп., 72, офис № 42'
			)
		);
		
		$wp_customize->add_control(
				'contacts_adress', 
				array(
				    'label'      => 'Адрес',
				    'section'    => 'contacts_section', 
				    'settings'   => 'contacts_adress' 
				)
		);



		$wp_customize->add_setting(
			'contacts_graphic',
			array(
				'default'     => 'Работаем с 9:00 до 18:00 (суббота и воскресенье выходные)'
			)
		);
		
		$wp_customize->add_control(
				'contacts_graphic', 
				array(
				    'label'      => 'График работы',
				    'section'    => 'contacts_section', 
				    'settings'   => 'contacts_graphic' 
				)
		);


		$wp_customize->add_setting(
			'social_inst',
			array(
				'default'     => 'https://www.instagram.com/dirdino_official/'
			)
		);
		
		$wp_customize->add_control(
				'social_inst', 
				array(
				    'label'      => 'Instagram',
				    'section'    => 'socials_section', 
				    'settings'   => 'social_inst' 
				)
		);



		$wp_customize->add_setting(
			'social_fb',
			array(
				'default'     => 'https://goo.gl/HFbllG'
			)
		);
		
		$wp_customize->add_control(
				'social_fb', 
				array(
				    'label'      => 'Facebook',
				    'section'    => 'socials_section', 
				    'settings'   => 'social_fb' 
				)
		);


		$wp_customize->add_setting(
			'social_vk',
			array(
				'default'     => 'https://vk.com/dirdinoofficial'
			)
		);
		
		$wp_customize->add_control(
				'social_vk', 
				array(
				    'label'      => 'VK',
				    'section'    => 'socials_section', 
				    'settings'   => 'social_vk' 
				)
		);


		$wp_customize->add_setting(
			'social_ok',
			array(
				'default'     => 'https://ok.ru/group/53163000463537'
			)
		);
		
		$wp_customize->add_control(
				'social_ok', 
				array(
				    'label'      => 'Odnoklassniki',
				    'section'    => 'socials_section', 
				    'settings'   => 'social_ok' 
				)
		);




// -------------------

		$wp_customize->add_setting(
			'gallery_name1',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name1', 
				array(
				    'label'      => 'Название Галереи #1',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name1' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link1',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link1', 
				array(
				    'label'      => 'Ссылка Галереи #1',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link1' 
				)
		);


// ***********


// -------------------

		$wp_customize->add_setting(
			'gallery_name2',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name2', 
				array(
				    'label'      => 'Название Галереи #2',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name2' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link2',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link2', 
				array(
				    'label'      => 'Ссылка Галереи #2',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link2' 
				)
		);


// ***********



// -------------------

		$wp_customize->add_setting(
			'gallery_name3',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name3', 
				array(
				    'label'      => 'Название Галереи #3',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name3' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link3',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link3', 
				array(
				    'label'      => 'Ссылка Галереи #3',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link3' 
				)
		);


// ***********


// -------------------

		$wp_customize->add_setting(
			'gallery_name4',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name4', 
				array(
				    'label'      => 'Название Галереи #4',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name4' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link4',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link4', 
				array(
				    'label'      => 'Ссылка Галереи #4',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link4' 
				)
		);


// ***********



// -------------------

		$wp_customize->add_setting(
			'gallery_name5',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name5', 
				array(
				    'label'      => 'Название Галереи #5',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name5' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link5',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link5', 
				array(
				    'label'      => 'Ссылка Галереи #1',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link5' 
				)
		);


// ***********




// -------------------

		$wp_customize->add_setting(
			'gallery_name6',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name6', 
				array(
				    'label'      => 'Название Галереи #6',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name6' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link6',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link6', 
				array(
				    'label'      => 'Ссылка Галереи #6',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link6' 
				)
		);


// ***********



// -------------------

		$wp_customize->add_setting(
			'gallery_name7',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name7', 
				array(
				    'label'      => 'Название Галереи #7',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name7' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link7',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link7', 
				array(
				    'label'      => 'Ссылка Галереи #7',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link7' 
				)
		);


// ***********




// -------------------

		$wp_customize->add_setting(
			'gallery_name8',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name8', 
				array(
				    'label'      => 'Название Галереи #8',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name8' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link8',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link8', 
				array(
				    'label'      => 'Ссылка Галереи #8',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link8' 
				)
		);


// ***********




// -------------------

		$wp_customize->add_setting(
			'gallery_name9',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name9', 
				array(
				    'label'      => 'Название Галереи #9',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name9' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link9',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link9', 
				array(
				    'label'      => 'Ссылка Галереи #9',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link1' 
				)
		);


// ***********






// -------------------

		$wp_customize->add_setting(
			'gallery_name10',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_name10', 
				array(
				    'label'      => 'Название Галереи #10',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_name10' 
				)
		);


		$wp_customize->add_setting(
			'gallery_link10',
			array(
				'default'     => ''
			)
		);
		
		$wp_customize->add_control(
				'gallery_link10', 
				array(
				    'label'      => 'Ссылка Галереи #10',
				    'section'    => 'header_gallery', 
				    'settings'   => 'gallery_link10' 
				)
		);


// ***********






		// ========= ============= ================




		$wp_customize->add_section(
			'mainpage_banner', 
			array(
				'title'     => 'Баннер (главная страница)',
				'priority'  => 24
			)
		);

		$wp_customize->add_section(
			'mainpage_benefit_section1', 
			array(
				'title'     => 'Наши плюсы (блок #1)',
				'priority'  => 25
			)
		);


		$wp_customize->add_section(
			'mainpage_benefit_section2', 
			array(
				'title'     => 'Наши плюсы (блок #2)',
				'priority'  => 26
			)
		);


		$wp_customize->add_section(
			'mainpage_benefit_section3', 
			array(
				'title'     => 'Наши плюсы (блок #3)',
				'priority'  => 27
			)
		);


		$wp_customize->add_section(
			'contacts_section', 
			array(
				'title'     => 'Контактные данные',
				'priority'  => 28
			)
		);	


		$wp_customize->add_section(
			'socials_section', 
			array(
				'title'     => 'Соц.сети',
				'priority'  => 29
			)
		);		



		$wp_customize->add_section(
			'header_gallery', 
			array(
				'title'     => 'Галерея - ссылки и названия',
				'priority'  => 30
			)
		);		


}

add_action( 'customize_register', 'mytheme_customize_register' );


// --------------------------



?>