<?php
	return array(
			'images' => array(
				'main' => array(120, 145),
				'events' => array(230, 330),
				'related' => array(220, 265)
			),

			'email' => 'site@anons.dp.ua',
			'the_best' => 'Афиша Днепропетровска № ❶',

			'seo' => array(
				'title' => '%s - Афиша Днепропетровска - Anons.dp.ua',
				'description' => '%s'
			),

			'days' => array(
				'0' => 'воскресенье', '1' => 'понедельник', '2' => 'вторник',
				'3' => 'среда', '4' => 'четверг', '5' => 'пятница', '6' => 'суббота'
			),

			'EVENT_IMG_FRONT' => '?w=110&h=160&tc',
                        //'EVENT_IMG_FRONT' => '?w=160&h=160&tc',
			'EVENT_IMG_DESC' => '?h=430&w=300&tc',
			'EVENT_IMG_RELATED' => '?w=220&h=265&tc',
			'PLACE_IMG_ALL' => '?w=110&h=160&tc',
			'EVENT_IMG_ALL' => '?w=110&h=160&tc',
			'CINEMA_IMG_ALL' => '?w=110&h=160&tc',

			'items_per_page' => 30,
			'items_on_front' => 10,
			'path_site' => 'http://frontend.anons.dp.ua',
			'path_to_img' => 'adminka.anons.dp.ua',
			'path_to_icons' => 'http://adminka.anons.dp.ua/images/category_default/',
			'upload_path' => '/html/anons.dp.ua/adminka/images/sunny/events/events/',
                      
       'show_social_buttons' => true,

			'month' => array(
				1 => 'января',
				2 => 'февраля',
				3 => 'марта',
				4 => 'апреля',
				5 => 'мая',
				6 => 'июня',
				7 => 'июля',
				8 => 'августа',
				9 => 'сентября',
				10 => 'октября',
				11 => 'ноября',
				12 => 'декабря'
			),

			'days' => array(
				1 => 'понедельник',
				2 => 'вторник',
				3 => 'среда',
				4 => 'четверг',
				5 => 'пятница',
				6 => 'суббота',
				7 => 'воскресенье',
				0 => 'воскресенье',
			),

			'days_short' => array(
				1 => 'Пн',
				2 => 'Вт',
				3 => 'Ср',
				4 => 'Чт',
				5 => 'Пт',
				6 => 'Сб',
				0 => 'Вс',				
			),

			'login' => 'Войти',
			'logout' => 'Выйти',

	    	'menu' => array(
				'main' => array(
					'href' => URL::base(),
					'title' => 'Найди свое событие - Anons.dp.ua'
				),
				'events' => array(
					'href' => '/events',
					'title' => 'События',
					'seo' => 'Афиша Днепропетровска'
				),
				'places' => array(
					'href' => '/places',
					'title' => 'Места',
					'seo' => 'Что посетить в Днепропетровске?'
				),
				'films' => array(
					'href' => '/films',
					'title' => 'Фильмы',
					'seo' => 'Что посмотреть в Днепропетровске?'
				),
        'cinema' => array(
            'href' => '/cinema',
            'title' => 'Кинотеатры',
            'seo' => 'Где посмотреть кино в Днепропетровске?'
        ),
        'blog' => array(
        	'href' => '/blog',
        	'title' => 'Блог',
        	'seo' => 'Блог в большом городе'
        ),
				'my' => array(
					'href' => '/users',
					'title' => 'Мой Анонс',
					'seo' => 'Мой Анонс'
				)
			),

			'menu_footer' => array(
				'events' => array(
					'href' => '/events',
					'title' => 'События Днепропетровска',
					'seo' => 'События Днепропетровска'
				),
				'places' => array(
					'href' => '/places',
					'title' => 'Места Днепропетровска',
					'seo' => 'Места Днепропетровска'
				),
				'films' => array(
					'href' => '/films',
					'title' => 'Фильмы в Днепропетровске',
					'seo' => 'Фильмы в Днепропетровске'
				),
				'cinema' => array(
					'href' => '/cinema',
					'title' => 'Кинотеатры Днепропетровска',
					'seo' => 'Кинотеатры Днепропетровска'
				),
				'blog' => array(
					'href' => '/blog',
					'title' => 'Блог',
					'seo' => 'Блог в большом городе'
				),
				'about' => array(
					'href' => '/about',
					'title' => 'О проекте',
					'seo' => 'О проекте Anons.dp.ua'
				),
				/*
				'regulations' => array(
					'href' => '/regulations',
					'title' => 'Правила',
					'seo' => 'Правила использования сервиса'
				),
				
				'contacts' => array(
					'href' => '/contacts',
					'title' => 'Контактная информация',
					'seo' => 'Контактная информация'
				)*/
			)
	);
?>