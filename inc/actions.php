<?php

/* Подключение стилей и скриптов */
add_action('wp_enqueue_scripts', function () {

	if (is_front_page() || is_home() || is_page('lager-mshu')) {
		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], time());
	}
	wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], time());

	wp_enqueue_script('jquery');

	if (is_front_page() || is_home() || is_page('lager-mshu')) {
		wp_enqueue_script(
			'swiper-js',
			'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
			[],
			time(),
			[
				'in_footer' => true,
				'strategy'  => 'defer',
			]
		);
	}
	if (is_front_page()) {
		wp_enqueue_script(
			'lodash-js',
			'https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js',
			[],
			time(),
			[
				'in_footer' => true,
				'strategy'  => 'defer',
			]
		);
	}
	wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], time(), true);
});

add_action('after_setup_theme', function () {

	// Регистрируем главное меню
	register_nav_menu('header-menu', 'Меню в шапке');

	// Смена логотипа
	add_theme_support('custom-logo');

	/* Добавляем возможность ставить постам миниатюры */
	add_theme_support('post-thumbnails');

	/* Тайтлы старницы ставятся автоматом */
	add_theme_support('title-tag');

	/* Включаем поддержку html5 */
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	/* Отключаем админбар */
	add_theme_support('admin-bar', ['callback' => '__return_false']);
});


/* Добавление городов для слайдера наставников и цитат менторов для блока цитат в глобальные переменные */

function add_acf_data_to_js()
{
	// Пустой объект для хранения цитат
	global $cities, $quotes;
	$cities = array();
	$quotes = array();

	// Получение данных о городах (из повторителя 'mentors')
	if (have_rows('mentors')) {
		while (have_rows('mentors')) {
			the_row();

			// Получаем значение под-поля
			$city = get_sub_field('mentors_city');

			// Добавляем город в массив, если значение существует
			if (!empty($city)) {
				$cities[] = $city;
			}
		}
	}

	// Получение данных о цитатах (из повторителя 'opinion')
	if (have_rows('opinion')) {
		while (have_rows('opinion')) {
			the_row();

			$photo_url = get_sub_field('opinion_photo');
			$quote = get_sub_field('opinion_quote');
			$name = get_sub_field('opinion_name');
			$position = get_sub_field('opinion_position');
			$company = get_sub_field('opinion_company');

			// Если значение существует, добавить его в массив
			if ($photo_url && $quote && $name && $position) {
				$opinion = new stdClass();
				$opinion->photo_url = $photo_url;
				$opinion->photo_alt = $name;
				$opinion->quote = $quote;
				$opinion->name = $name;
				$opinion->position = $position;
				$opinion->company = $company;

				$quotes[] = $opinion;
			}
		}
	}

	// Генерация JavaScript-кода с массивом городов и цитат
	$inline_script = 'var cities = ' . json_encode($cities) . ';';
	$inline_script .= 'var quotes = ' . json_encode($quotes) . ';';

	// Добавляем JavaScript-код перед подключением основного скрипта
	wp_add_inline_script('scripts', $inline_script, 'before');
}
add_action('wp_enqueue_scripts', 'add_acf_data_to_js');
