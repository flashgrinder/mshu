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

<!-- Registration -->
<?php if( have_rows('reg-slider', 12) ): ?>
	<section class="reg-slider js-reveal gs-reveal">
		<div class="reg-slider__swiper swiper js-registration-slider">
			<div class="reg-slider__items swiper-wrapper">
				<?php while( have_rows('reg-slider', 12) ): the_row();
					$reg_slider_title = get_sub_field('reg-slider_title');
					$reg_slider_description = get_sub_field('reg-slider_description');
					$reg_slider_date = get_sub_field('reg-slider_date');
					$reg_slider_location = get_sub_field('reg-slider_location');
				?>
					<div class="reg-slider__item swiper-slide">
						<div class="reg-slider__outer">
							<div class="reg-slider__inner">
								<h2 class="reg-slider__title title title--medium title--white title--w-bold"><?php echo acf_esc_html($reg_slider_title); ?></h2>
								<div class="reg-slider__description text text--medium text--white text--w-regular"><?php echo acf_esc_html($reg_slider_description); ?></div>
								<div class="reg-slider__layout">
									<ul class="reg-slider__info-list text text--medium text--white text--w-regular">
										<li class="reg-slider__info-item">
											<svg class="reg-slider__icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M25.188 3.875H22.28v-.969a.969.969 0 1 0-1.937 0v.969h-9.688v-.969a.969.969 0 1 0-1.937 0v.969H5.813a1.937 1.937 0 0 0-1.938 1.938v19.375a1.937 1.937 0 0 0 1.938 1.937h19.375a1.937 1.937 0 0 0 1.937-1.938V5.813a1.937 1.937 0 0 0-1.938-1.937Zm-12.594 18.89a2.93 2.93 0 0 1-2.059-.847.969.969 0 0 1 0-1.368.957.957 0 0 1 1.368 0c.186.177.433.277.69.278a.969.969 0 1 0 0-1.937h-.302l-.048-.025h-.037l-.06-.024h-.012l-.073-.048h-.024l-.049-.037-.048-.036-.024-.024-.037-.037a1.038 1.038 0 0 1-.157-.242.705.705 0 0 1-.073-.206c-.012-.012-.012-.024-.012-.048a.048.048 0 0 0-.012-.036v-.291c0-.024.012-.036.012-.048v-.049a.073.073 0 0 0 .012-.048c.012-.012.012-.024.012-.049l.024-.036c0-.024 0-.036.013-.048l.024-.049v-.036l.024-.049.024-.036.037-.048.024-.025.678-.847h-1.368a.969.969 0 0 1 0-1.938h3.39a.97.97 0 0 1 .751 1.574l-1.066 1.345a2.906 2.906 0 0 1-1.622 5.316Zm7.75-.968a.969.969 0 0 1-1.938 0v-4.36l-.387.291a.98.98 0 0 1-1.356-.194.969.969 0 0 1 .193-1.356l1.938-1.453a.969.969 0 0 1 1.55.775v6.297Zm4.843-12.11H5.813V5.813H8.72v.968a.969.969 0 1 0 1.937 0v-.968h9.688v.968a.969.969 0 1 0 1.937 0v-.968h2.907v3.875Z" fill="#fff" />
											</svg>
											<?php echo acf_esc_html($reg_slider_date); ?>
										</li>
										<li class="reg-slider__info-item">
											<svg class="reg-slider__icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.5 1.938A10.668 10.668 0 0 0 4.844 12.594c0 9.118 9.687 16.008 10.099 16.299a1.005 1.005 0 0 0 1.114 0c.412-.29 10.1-7.18 10.1-16.3A10.668 10.668 0 0 0 15.5 1.939Zm0 6.78a3.875 3.875 0 1 1 0 7.75 3.875 3.875 0 0 1 0-7.75Z" fill="#fff" />
											</svg>
											<?php echo acf_esc_html($reg_slider_location); ?>
										</li>
									</ul>
									<a href="javascript:;" class="reg-slider__button button button--primary" data-modal="#registration">
										Принять участие
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="reg-slider__arrows slider-arrows slider-nav">
				<div class="swiper-button-prev reg-slider__arrow reg-slider__arrow--prev slider-arrows__arrow slider-arrows__arrow--prev js-slider-prev">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M19 12H5" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M12 19L5 12L12 5" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>

				<div class="reg-slider__pagination swiper-pagination slider-pagination js-registration-slider-pagination"></div>

				<div class="swiper-button-next reg-slider__arrow reg-slider__arrow--next slider-arrows__arrow slider-arrows__arrow--next js-slider-next">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5 12H19" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M12 5L19 12L12 19" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- ./ Registration -->

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
			<?php if ($post_list->have_posts()) :
				while ($post_list->have_posts()) : $post_list->the_post(); ?>
					<article class="news-list__post js-reveal gs-reveal">
						<div class="news-list__pic">
							<?php
							$default_attr = [
								'class'	=> "news-list__img",
								'alt'   => get_the_title()
							];
							echo get_the_post_thumbnail($post->ID, 'thumbnail', $default_attr) ?>
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
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
		<?php
		$pageNum = (get_query_var('paged')) ? get_query_var('paged') : 1; // получаем номер текущей страницы и присваиваем значение переменной

		$count_posts = wp_count_posts('post'); //указываем созданный вами тип записи - services
		$published_posts = $count_posts->publish;
		?>
		<?php if ($published_posts > 4): ?>
			<nav class="news-list__nav js-reveal gs-reveal">
				<?php if ($published_posts > 4): ?>
					<a href="<?= ($pageNum == 1) ? 'javascript:;' : previous_posts(); ?>" class="news-list__prev <?= ($pageNum == 1) ? 'news-list__prev--first-page' : '' ?>">
						Предыдущая
					</a>
				<?php endif; ?>
				<?php
				global $wp_query;
				$current_page = $wp_query->get('paged');
				?>
				<?php if ($published_posts > 4): ?>
					<a href="<?= next_posts(); ?>" class="news-list__next" <?php if ($current_page == $wp_query->max_num_pages): ?>style="display:none;" <?php endif; ?>>
						Следующая
					</a>
				<?php endif; ?>
			</nav>
		<?php endif; ?>
	</div>
</section>
<!-- ./ News -->

<?php get_footer(); ?>