<?php 
show_admin_bar(false);


function mytheme_customize_register( $wp_customize ) {




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



		// ========= ============= ================


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


}

add_action( 'customize_register', 'mytheme_customize_register' );



?>