<?php get_header(); ?>

<?php the_post(); ?>
<!-- Head-info news -->
<section class="head-info head-info--news js-reveal gs-reveal">
	<div class="head-info__body container">
		<h1 class="head-info__heading title title--big title--white title--w-bold js-reveal gs-reveal a-reveal-left">
			<?= get_the_title(get_option('page_for_posts', true)); ?>
		</h1>
	</div>
</section>
<!-- ./ Head-info news -->

<!-- News -->
<section class="news-list">
	<div class="news-list__body container">
		<div class="news-list__items">
			<?php
				global $post;
				$post_list = new WP_Query(array(
					'post_type'  => 'post',
					'post_status' => 'publish',
					'paged'          => get_query_var('paged'),
					'orderby'     => 'date',
					'order'       => 'DESC',
					'suppress_filters' => true
				));

			?>
			<?php if( $post_list->have_posts() ) :
				while( $post_list->have_posts() ) : $post_list->the_post(); ?>
					<article class="news-list__post js-reveal gs-reveal">
						<div class="news-list__pic">
							<?php
								$default_attr = [
									'class'	=> "news-list__img",
									'alt'   => get_the_title()
								];
								echo get_the_post_thumbnail( $post->ID, 'thumbnail', $default_attr ) ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="news-list__plunk">
							<h3 class="news-list__title text text--normal text--white text--w-regular center">
								<?php the_title(); ?>
							</h3>
						</a>
						<div class="news-list__date text text--normal text--white text--w-regular">
							<?= get_the_date('d.m.Y'); ?>
						</div>
						<div class="news-list__description">
							<p class="news-list__excerpt text text--normal text--white text--w-regular center">
								<?php the_excerpt(); ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="news-list__more-btn button button--primary">
								Читать далее
							</a>
						</div>
					</article>
				<?php endwhile; ?>
			<?php  endif; ?>
			<?php wp_reset_query(); ?>
		</div>
			<?php
				$pageNum = (get_query_var('paged')) ? get_query_var('paged') : 1; // получаем номер текущей страницы и присваиваем значение переменной

				$count_posts = wp_count_posts('post'); //указываем созданный вами тип записи - services
				$published_posts = $count_posts->publish;
			?>
		<?php if($published_posts > 4): ?>
			<nav class="news-list__nav js-reveal gs-reveal">
				<?php if( $published_posts > 4 ): ?>
					<a href="<?= ($pageNum == 1 ) ? 'javascript:;' : previous_posts(); ?>" class="news-list__prev <?= ($pageNum == 1 ) ? 'news-list__prev--first-page' : '' ?>">
						Предыдущая
					</a>
				<?php endif; ?>
				<?php
					global $wp_query;
					$current_page = $wp_query->get( 'paged' );
				?>
				<?php if( $published_posts > 4): ?>
					<a href="<?= next_posts(); ?>" class="news-list__next" <?php if($current_page == $wp_query->max_num_pages): ?>style="display:none;"<?php endif; ?>>
						Следующая
					</a>
				<?php endif; ?>
			</nav>
		<?php endif; ?>
	</div>
</section>
<!-- ./ News -->

<?php get_footer(); ?>