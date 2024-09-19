<?php

	/* Убираем тег <p></p> у отрывков */
	remove_filter( 'the_excerpt','wpautop');

	add_filter('wpcf7_autop_or_not', '__return_false');

	// Длина отрывков новостьов
	add_filter( 'excerpt_length', function($number) {
		return 30;
	});

	// Окончание отрывков новостьов
	add_filter( 'excerpt_more', function($more_string){
		return '...';
	});

	// Добавляет класс пунктам меню в шапке
	add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth) {

		if($args->theme_location === 'header-menu') {
			$classes[] = 'menu__item header__menu-item';
		}

		return $classes;

	}, 10, 4 );

	// Добавляет класс ссылкам меню в шапке
	add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {

		if($args->theme_location === 'header-menu') {
			$atts['class'] = 'menu__link header__menu-link js-transition-link';
		}

		return $atts;

	}, 10, 3);

	// Добавляет активный класс к пунктам меню
	add_filter('nav_menu_css_class' , function($classes, $item) {

		if ( in_array('current-menu-item', $classes) ){

			$classes[] = 'is-active ';

		}
		return $classes;

	}, 10 , 2);

	// Изменить название Записи
	add_filter('post_type_labels_post', function($labels) {

		$new = [
			'name'                  => 'Новости',
			'singular_name'         => 'Новость',
			'add_new'               => 'Добавить новость',
			'add_new_item'          => 'Добавить новость',
			'edit_item'             => 'Редактировать новость',
			'new_item'              => 'Новая новость',
			'view_item'             => 'Просмотреть новость',
			'search_items'          => 'Поиск новостей',
			'not_found'             => 'Новости не найдены.',
			'not_found_in_trash'    => 'Новости в корзине не найдены.',
			'parent_item_colon'     => '',
			'all_items'             => 'Все новости',
			'archives'              => 'Архивы новостей',
			'insert_into_item'      => 'Вставить в новость',
			'uploaded_to_this_item' => 'Загруженные для этой новости',
			'featured_image'        => 'Миниатюра новости',
			'filter_items_list'     => 'Фильтровать список новостей',
			'items_list_navigation' => 'Навигация по списку новостей',
			'items_list'            => 'Список новостей',
			'menu_name'             => 'Новости',
			'name_admin_bar'        => 'Новость'
		];

		return (object) array_merge( (array) $labels, $new );

	});

	add_filter('style_loader_tag', function ($html, $handle, $href, $media) {
		if ($handle === 'swiper') {
			$html = str_replace("<link ", "<link integrity='sha384-IFb872aCXZQb6BKRUHmGn0YHKnFl4ylZjkgVRRyMTEQ5bjo/H6xFUiLJm6opOO66' crossorigin='anonymous' ", $html);
		}
		if ($handle === 'swiper-js') {
			$html = str_replace("<link ", "<link integrity='sha384-MAGmzBVTmeQTSSONI7W9+cXWkt8l4on2ywlU/RB2JrQdD0x275DQ82KA5b+FsXJ2' crossorigin='anonymous' ", $html);
		}
		return $html;
	}, 10, 4);
