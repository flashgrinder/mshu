<?php

	/* Подключение стилей и скриптов */
	add_action( 'wp_enqueue_scripts', function() {

		wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], time() );
		wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', ['styles'], time() );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], time(), true );
		wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', ['scripts'], time(), true );

	} );

	add_action( 'after_setup_theme', function(){

		// Регистрируем главное меню
		register_nav_menu('header-menu', 'Меню в шапке');

		// Смена логотипа
		add_theme_support('custom-logo');

		/* Добавляем возможность ставить постам миниатюры */
		add_theme_support('post-thumbnails');

		/* Тайтлы старницы ставятся автоматом */
		add_theme_support('title-tag');

		/* Включаем поддержку html5 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		/* Отключаем админбар */
		add_theme_support( 'admin-bar', ['callback' => '__return_false'] );

	});

	add_action( 'wp_head', function() {

		?>



		<?php
	});