<?php
	function get_last_page_url() {

		$publisheds_posts = wp_count_posts()->publish;
//		$publisheds_posts = count( get_posts( array('posts_per_page' => -1,'category' => '-7',) ) );
		$posts_per_page = 4; // число на стр
		$page_number_max = ceil($publisheds_posts / $posts_per_page);

		$link = esc_url(get_pagenum_link($page_number_max));
//		$link  = get_post_type_archive_link( 'post' ) . 'paged/' . $page_number_max;

		return $link;
	}