<?php /* Template Name: Главная */?>
<?php get_header(); ?>
<?php
	$about = get_field('about');
	$dictation = get_field('dictation');
?>
<div class="main-blocks-wrapper">
	<!-- Main-screen -->
	<section class="main-screen js-reveal gs-reveal">
		<div class="main-screen__body container">
			<div class="main-screen__decor">
				<img src="<?= STANDART_DIR; ?>/img/main-screen/main-screen-decor.svg" alt="Декоративный элемент" class="main-screen__img-decor">
			</div>
			<div class="main-screen__inner">
				<h1 class="main-screen__heading title title--big title--white title--w-bold js-reveal gs-reveal a-reveal-left">
					Молодежная
					<br>
					Школа
					<br>
					Юриста
				</h1>
				<div class="main-screen__info">
					<p class="main-screen__text text text--medium text--white text--w-regular right js-reveal gs-reveal a-reveal-right">
						погрузись в будущую профессиональную деятельность
					</p>
					<p class="main-screen__text text text--medium text--white text--w-regular right js-reveal gs-reveal a-reveal-right">
						повысь уровень правовой грамотности
					</p>
					<p class="main-screen__text text text--medium text--white text--w-regular right js-reveal gs-reveal a-reveal-right">
						получи уникальный опыт
					</p>
				</div>
			</div>
			<div class="main-screen__wrap-lines">
				<div class="main-screen__lines">
					<span class="main-screen__line main-screen__line--large"></span>
					<span class="main-screen__line main-screen__line--medium"></span>
					<span class="main-screen__line main-screen__line--medium"></span>
					<span class="main-screen__line main-screen__line--large"></span>
				</div>
			</div>
		</div>
		<div class="main-screen__wrap-logos container">
			<div class="main-screen__logos">
				<img src="<?= STANDART_DIR; ?>/img/main-screen/logo-1.png" alt="" class="main-screen__img">
				<img src="<?= STANDART_DIR; ?>/img/main-screen/logo-2.png" alt="" class="main-screen__img">
				<img src="<?= STANDART_DIR; ?>/img/main-screen/logo-3.png" alt="" class="main-screen__img">
			</div>
		</div>
	</section>
	<!-- ./ Main-screen -->

	<!-- Dictation-about -->
	<section class="dictation dictation--about js-reveal gs-reveal">
		<div class="dictation__body container">
			<h2 class="dictation__heading title title--big title--black title--w-bold left title--indent-small js-reveal gs-reveal a-reveal-left">
				О программе
			</h2>
			<div class="dictation__text text text--medium text--dark text--w-regular left">
				<?= $about; ?>
			</div>
			<div class="dictation__actions left">
				<a href="javascript:;" class="dictation__button button button--primary" data-modal="#participant">
					Присоединиться
				</a>
			</div>
		</div>
	</section>
	<!-- ./ Dictation-about -->
</div>

<!-- Combine -->
<section class="combine js-reveal gs-reveal">
	<div class="combine__body">
		<div class="combine__wrapper-decor combine__wrapper-decor--only-desktop">
			<div class="combine__decor">
				<div class="combine__images-decor">
					<div class="combine__circle-decor combine__circle-decor--big"></div>
					<div class="combine__circle-decor combine__circle-decor--small"></div>
				</div>
				<div class="combine__name-decor">
					<img src="<?= STANDART_DIR; ?>/img/combine/img-name.svg" alt="" class="combine__name-svg">
				</div>
			</div>
		</div>
		<div class="combine__wrap container">
			<div class="combine__info">
				<h2 class="combine__heading title title--big title--white title--w-bold left title--indent-small js-reveal gs-reveal a-reveal-left">
					Объединяем
				</h2>
				<div class="combine__text text text--medium text--white text--w-regular">
					1. Талантливую молодёжь страны
				</div>
				<div class="combine__text text text--medium text--white text--w-regular">
					2. Уникальные компетенции представителей крупнейших вузов страны, органов власти,
					профессиональных юристов и предпринимателей
				</div>
			</div>
		</div>
		<div class="combine__wrapper-decor combine__wrapper-decor--only-mobile">
			<div class="combine__decor">
				<div class="combine__images-decor">
					<div class="combine__circle-decor combine__circle-decor--big"></div>
					<div class="combine__circle-decor combine__circle-decor--small"></div>
				</div>
				<div class="combine__name-decor">
					<img src="<?= STANDART_DIR; ?>/img/combine/img-name.svg" alt="" class="combine__name-svg">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ Combine -->

<!-- Tasks -->
<section class="tasks js-reveal gs-reveal">
	<div class="tasks__body container">
		<h2 class="tasks__heading title title--big title--black title--w-bold center title--indent-small js-reveal gs-reveal a-reveal-left">
			Задачи проекта
		</h2>
		<ul class="tasks__list text text--medium text--dark text--w-regular left">
			<li class="tasks__item js-reveal gs-reveal a-reveal-left">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17.5 17.5C24.1447 17.5 29.5312 14.5619 29.5312 10.9375C29.5312 7.31313 24.1447 4.375 17.5 4.375C10.8553 4.375 5.46875 7.31313 5.46875 10.9375C5.46875 14.5619 10.8553 17.5 17.5 17.5Z" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M5.46875 10.9375V17.5C5.46875 21.123 10.8555 24.0625 17.5 24.0625C24.1445 24.0625 29.5312 21.123 29.5312 17.5V10.9375" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M5.46875 17.5V24.0625C5.46875 27.6855 10.8555 30.625 17.5 30.625C24.1445 30.625 29.5312 27.6855 29.5312 24.0625V17.5" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				Раскрыть вопросы финансово-правовой грамотности
			</li>
			<li class="tasks__item js-reveal gs-reveal a-reveal-right">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.7656 21.875C19.2961 21.875 22.9688 18.2023 22.9688 13.6719C22.9688 9.14141 19.2961 5.46875 14.7656 5.46875C10.2352 5.46875 6.5625 9.14141 6.5625 13.6719C6.5625 18.2023 10.2352 21.875 14.7656 21.875Z" stroke="#3E3E3E" stroke-width="2" stroke-miterlimit="10"/>
						<path d="M3.03516 27.3437C4.47242 25.6307 6.26742 24.2533 8.29399 23.3082C10.3206 22.3632 12.5295 21.8734 14.7656 21.8734C17.0017 21.8734 19.2107 22.3632 21.2373 23.3082C23.2638 24.2533 25.0588 25.6307 26.4961 27.3437" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M30.0781 20.7812C31.2862 20.7812 32.2656 19.8019 32.2656 18.5938C32.2656 17.3856 31.2862 16.4062 30.0781 16.4062C28.87 16.4062 27.8906 17.3856 27.8906 18.5938C27.8906 19.8019 28.87 20.7812 30.0781 20.7812Z" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M30.0781 16.4062V14.7656" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M28.1777 17.5L26.7695 16.6797" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M28.1777 19.6875L26.7695 20.5078" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M30.0781 20.7812V22.4219" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M31.9785 19.6875L33.3867 20.5078" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M31.9785 17.5L33.3867 16.6797" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				Провести раннюю профориентацию для школьников
			</li>
			<li class="tasks__item js-reveal gs-reveal a-reveal-left">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.0312 21.875C15.9576 21.875 19.1406 18.692 19.1406 14.7656C19.1406 10.8392 15.9576 7.65625 12.0312 7.65625C8.10485 7.65625 4.92188 10.8392 4.92188 14.7656C4.92188 18.692 8.10485 21.875 12.0312 21.875Z" stroke="#3E3E3E" stroke-width="2" stroke-miterlimit="10"/>
						<path d="M21.2461 7.91602C21.8746 7.74557 22.5227 7.65823 23.1738 7.65625C25.0594 7.65625 26.8676 8.40527 28.2009 9.73854C29.5342 11.0718 30.2832 12.8801 30.2832 14.7656C30.2832 16.6511 29.5342 18.4594 28.2009 19.7927C26.8676 21.126 25.0594 21.875 23.1738 21.875" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M2.1875 26.9883C3.29758 25.4086 4.77154 24.1193 6.48485 23.2292C8.19817 22.3392 10.1005 21.8745 12.0312 21.8745C13.962 21.8745 15.8643 22.3392 17.5776 23.2292C19.291 24.1193 20.7649 25.4086 21.875 26.9883" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M23.1738 21.875C25.1047 21.8738 27.0075 22.3379 28.721 23.228C30.4345 24.118 31.9083 25.4079 33.0176 26.9883" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				Внедрить систему наставничества
			</li>
			<li class="tasks__item js-reveal gs-reveal a-reveal-right">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4.375 29.5312V7.65625C4.375 7.36617 4.49023 7.08797 4.69535 6.88285C4.90047 6.67773 5.17867 6.5625 5.46875 6.5625H29.5312C29.8213 6.5625 30.0995 6.67773 30.3046 6.88285C30.5098 7.08797 30.625 7.36617 30.625 7.65625V29.5312L26.25 27.3438L21.875 29.5312L17.5 27.3438L13.125 29.5312L8.75 27.3438L4.375 29.5312Z" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M9.84375 21.875L14.2188 13.125L18.5938 21.875" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M10.9375 19.6875H17.5" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M20.7812 17.5H26.25" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M23.5156 14.7656V20.2344" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				Создать основу для формирования уверенной коммуникации и успешных публичных выступлений у школьников в профессиональной среде
			</li>
		</ul>
	</div>
</section>
<!-- ./ Tasks -->

<!-- Party -->
<section class="party js-reveal gs-reveal">
	<div class="party__decor party__decor--1">
		<img src="<?= STANDART_DIR; ?>/img/party/party-decor.svg" alt="" class="party__decor-img js-reveal gs-reveal a-reveal-right">
	</div>
	<div class="party__decor party__decor--2">
		<img src="<?= STANDART_DIR; ?>/img/party/party-decor.svg" alt="" class="party__decor-img js-reveal gs-reveal a-reveal-left">
	</div>
	<div class="party__decor party__decor--3">
		<img src="<?= STANDART_DIR; ?>/img/party/party-decor.svg" alt="" class="party__decor-img">
	</div>
	<div class="party__decor party__decor--4">
		<img src="<?= STANDART_DIR; ?>/img/party/party-decor.svg" alt="" class="party__decor-img">
	</div>
	<div class="party__decor party__decor--5">
		<img src="<?= STANDART_DIR; ?>/img/party/party-decor.svg" alt="" class="party__decor-img js-reveal gs-reveal a-reveal-right">
	</div>
	<div class="party__decor party__decor--6">
		<img src="<?= STANDART_DIR; ?>/img/party/party-decor.svg" alt="" class="party__decor-img js-reveal gs-reveal a-reveal-left">
	</div>
	<div class="party__body container">
		<h2 class="party__heading title title--big title--black title--w-bold center title--indent-large js-reveal gs-reveal a-reveal-left">
			Участники проекта
		</h2>
		<div class="party__items">
			<div class="party__item js-reveal gs-reveal a-reveal">
				<img src="<?= STANDART_DIR; ?>/img/party/icon-1.svg" alt="" class="party__img">
				<div class="party__title title title--medium title--black title--w-bold">
					Государственные
					<br>
					органы власти
				</div>
			</div>
			<div class="party__item js-reveal gs-reveal">
				<img src="<?= STANDART_DIR; ?>/img/party/icon-2.svg" alt="" class="party__img">
				<div class="party__title title title--medium title--black title--w-bold">
					Вузы
				</div>
			</div>
			<div class="party__item js-reveal gs-reveal">
				<img src="<?= STANDART_DIR; ?>/img/party/icon-3.svg" alt="" class="party__img">
				<div class="party__title title title--medium title--black title--w-bold">
					Коммерческие
					<br>
					компании
				</div>
			</div>
			<div class="party__item js-reveal gs-reveal">
				<img src="<?= STANDART_DIR; ?>/img/party/icon-4.svg" alt="" class="party__img">
				<div class="party__title title title--medium title--black title--w-bold">
					Бизнес
					<br>
					реализующий КСО
				</div>
			</div>
			<div class="party__item js-reveal gs-reveal">
				<img src="<?= STANDART_DIR; ?>/img/party/icon-5.svg" alt="" class="party__img">
				<div class="party__title title title--medium title--black title--w-bold">
					Общественные
					<br>
					профессиональные объединения
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ Party -->

<div class="blocks-team-wrapper">

	<!-- General -->
	<section class="general js-reveal gs-reveal">
		<div class="general__body container">
			<div class="general__member">
				<div class="general__photo js-reveal gs-reveal a-reveal-left">
					<img src="<?= STANDART_DIR; ?>/img/general/member.png" alt="Татьяна Минеева" class="general__img">
				</div>
				<div class="general__info js-reveal gs-reveal a-reveal-rigth">
					<h3 class="general__title text text--medium text--white text--w-bold">
						Проект разработан по поручению Уполномоченного
						по защите прав предпринимателей в городе
						Москве Татьяны Минеевой
					</h3>
					<p class="general__description text text--medium text--white text--w-regular">
						“Наращивание профессиональных компетенций, ранняя профориентация в сфере юриспруденции и общая правовая грамотность населения составляют основу развития гражданского общества в нашей стране"
					</p>
					<div class="general__name text text--medium text--white text--w-regular">
						© Т.В. Минеева
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./ General -->

	<!-- Counsel -->
	<section class="counsel js-reveal gs-reveal" id="participants">
		<div class="counsel__body container">
			<?php if (have_rows('counsel-block')) : ?>
				<?php while (have_rows('counsel-block')) : the_row();

					$counsel_block_title = get_sub_field('counsel-block_title');
					$counsel_block_description = get_sub_field('counsel-block_descr');

					?>
					<div class="counsel__block">
						<h2 class="counsel__heading title title--big title--black title--w-bold <?php if(!empty($counsel_block_description)): ?>title--indent-small<?php else: ?>title--indent-large<?php endif; ?> js-reveal gs-reveal a-reveal-left">
							<?= $counsel_block_title; ?>
						</h2>
						<?php if(!empty($counsel_block_description)): ?>
							<div class="counsel__excerpt text text--medium text--dark text--w-regular">
								<?= $counsel_block_description; ?>
							</div>
						<?php endif; ?>
						<div class="counsel__items">
							<?php if (have_rows('counsel')) : ?>
								<?php $count = 0; ?>
								<?php while (have_rows('counsel')) : the_row();

									$counsel_photo = get_sub_field('counsel_photo');
									$counsel_name = get_sub_field('counsel_name');
									$counsel_description = get_sub_field('counsel_description');

									?>
									<div class="counsel__item js-reveal gs-reveal <?= (++$count%2 ? 'a-reveal-left' : 'counsel__item--revert a-reveal-right') ?>">
										<div class="counsel__inner">
											<div class="counsel__photo">
												<?php if (!empty($counsel_photo)) : ?>
													<img src="<?= esc_url($counsel_photo['url']); ?>" class="counsel__img" alt="<?= esc_url($counsel_photo['alt']); ?>">
												<?php endif; ?>
												<h3 class="counsel__name text text--medium text--white text--w-bold">
													<?= $counsel_name; ?>
												</h3>
											</div>
											<div class="counsel__info">
												<div class="counsel__description">
													<ul class="counsel__list text text--medium text--dark text--w-bold">
														<?php if (have_rows('counsel-list')) : ?>
															<?php while (have_rows('counsel-list')) : the_row();
																$counsel_list_item = get_sub_field('counsel_list_item');
																?>
																	<li class="counsel__item-list">
																		<?= $counsel_list_item; ?>
																	</li>
															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
												</div>
											</div>
										</div>
										<?php if(!empty($counsel_description)): ?>
											<div class="counsel__text text text--medium text--dark text--w-regular">
												<?= $counsel_description; ?>
											</div>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<!-- ./ Counsel -->

	<!-- Mentors -->
	<section class="mentors js-mentors-init" id="mentors">
		<div class="mentors__body container">
			<div class="mentors__tabs tabs">
				<div class="mentors__head-wrap title--indent-large">
					<h2 class="mentors__heading title title--big title--white title--w-bold">
						Наставники и спикеры
					</h2>
					<?php if( have_rows('mentors') ): ?>
						<div class="mentors__tabs-buttons tabs__buttons dropdown">
							<div id="basic-select" class="selected">
								<div class="carpet">
									<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M26 12L16 22L6 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
								<span id="select-title" class="selected__title">Москва</span>
							</div>
							<ul id="option-select" class="options">
								<?php while( have_rows('mentors') ): the_row();
									$mentors_city = get_sub_field('mentors_city');
									?>
									<li class="options__item tabs__button <?php if( get_row_index() == 1) echo 'is-active options__item--active'; ?>" data-tab-trigger="<?= get_row_index(); ?>">
										<?= $mentors_city; ?>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
				<div class="mentors__tabs-wrapper tabs__wrapper">
					<?php if( have_rows('mentors') ): ?>
						<?php while( have_rows('mentors') ): the_row(); ?>
							<div class="mentors__outer tabs__content <?php if( get_row_index() == 1) echo 'is-open'; ?> js-slider-mentors-init" data-tab-content="<?= get_row_index(); ?>">
								<div class="mentors__slider-wrap">
									<?php if( have_rows('mentors-slider') ): ?>
										<div class="mentors__swiper mentors__swiper--text js-mentors-slider-text swiper">
											<div class="mentors__items swiper-wrapper">
												<?php while( have_rows('mentors-slider') ): the_row();
													$mentors_slider_name = get_sub_field('mentors-slider_name');
													$mentors_slider_text = get_sub_field('mentors-slider_text');
													?>
														<div class="mentors__slide swiper-slide">
															<div class="mentors__name text text--medium text--white text--w-bold">
																<?= $mentors_slider_name; ?>
															</div>
															<div class="mentors__info text text--medium text--white text--w-regular">
																<?= $mentors_slider_text; ?>
															</div>
														</div>
												<?php endwhile; ?>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div class="mentors__slider-wrap">
									<?php if( have_rows('mentors-slider') ): ?>
										<div class="mentors__swiper mentors__swiper--photo js-mentors-slider-photo swiper">
											<div class="mentors__items swiper-wrapper">
												<?php while( have_rows('mentors-slider') ): the_row();
													$mentors_slider_photo = get_sub_field('mentors-slider_photo');
													?>
													<div class="mentors__slide swiper-slide">
														<img src="<?php echo esc_url($mentors_slider_photo['url']); ?>" alt="<?php echo esc_attr($mentors_slider_photo['alt']); ?>" class="mentors__img">
													</div>
												<?php endwhile; ?>
											</div>
											<div class="news-slider__arrows slider-arrows slider-nav">
												<div class="swiper-button-prev news-slider__arrow news-slider__arrow--prev slider-arrows__arrow slider-arrows__arrow--prev js-slider-prev">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19 12H5" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 19L5 12L12 5" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>

												<div class="news-slider__pagination swiper-pagination slider-pagination js-mentors-slider-pagination"></div>

												<div class="swiper-button-next news-slider__arrow news-slider__arrow--next slider-arrows__arrow slider-arrows__arrow--next js-slider-next">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M5 12H19" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 5L19 12L12 19" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- ./ Mentors -->

</div>

<!-- Dictation-member -->
<section class="dictation dictation--member js-reveal gs-reveal">
	<div class="dictation__body container">
		<h2 class="dictation__heading title title--big title--black title--w-bold center title--indent-small js-reveal gs-reveal a-reveal-left">
			Стать участником и наставником
		</h2>
<!--		<div class="dictation__text text text--medium text--dark text--w-regular center js-reveal gs-reveal a-reveal-left">-->
<!--			Правовой предпринимательский диктант для молодежи – специальное мероприятие, организованное с целью проверки-->
<!--			знаний и понимания молодежью основных правовых аспектов предпринимательской деятельности.-->
<!--		</div>-->
		<div class="dictation__actions center">
			<a href="javascript:;" class="dictation__button button button--primary js-reveal gs-reveal a-reveal-left" data-modal="#participant">
				Участник
			</a>
			<a href="javascript:;" class="dictation__button button button--primary js-reveal gs-reveal a-reveal-right" data-modal="#mentor">
				Наставник
			</a>
		</div>
	</div>
</section>
<!-- ./ Dictation-member -->

<!-- News-slider -->
<section class="news-slider js-reveal gs-reveal">
	<div class="news-slider__body">
		<h2 class="news-slider__heading title title--big title--white title--w-bold center title--indent-small js-reveal gs-reveal a-reveal-left">
			Новости
		</h2>
		<div class="news-slider__outer">
			<div class="news-slider__swiper js-news-slider swiper">
				<div class="news-slider__items swiper-wrapper">
					<?php
						global $post;
						$main_list = new WP_Query(array(
							'post_type'   => 'post',
							'post_status' => 'publish',
							'posts_per_page' => 8,
							'paged'       => get_query_var('paged') ?: 1,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'suppress_filters' => true
						));

					?>
					<?php if( $main_list->have_posts() ) :
						while( $main_list->have_posts() ) : $main_list->the_post(); ?>
							<div class="news-slider__item swiper-slide">
								<?php
									$default_attr = [
										'class'	=> "news-slider__img",
										'alt'   => get_the_title()
									];
									echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); ?>
								<a href="<?php the_permalink(); ?>" class="news-slider__inner text text--medium text--w-regular center">
									<?php the_title(); ?>
								</a>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php  endif; ?>
				</div>
				<div class="news-slider__arrows slider-arrows slider-nav">
					<div class="swiper-button-prev news-slider__arrow news-slider__arrow--prev slider-arrows__arrow slider-arrows__arrow--prev js-slider-prev">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 12H5" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12 19L5 12L12 5" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>

					<div class="news-slider__pagination swiper-pagination slider-pagination js-news-slider-pagination"></div>

					<div class="swiper-button-next news-slider__arrow news-slider__arrow--next slider-arrows__arrow slider-arrows__arrow--next js-slider-next">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5 12H19" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12 5L19 12L12 19" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ News-slider -->

<!-- Partners-slider -->
<section class="partners partners--slider js-reveal gs-reveal">
	<div class="partners__body container">
		<h2 class="partners__heading title title--big title--red-gradient title--w-bold center title--indent-large js-reveal gs-reveal a-reveal-left">
			Партнёры
		</h2>
	</div>
	<div class="partners__outer">
		<div class="partners__swiper partners__slider js-partners-slider swiper">
			<div class="partners__items swiper-wrapper">
				<?php if( have_rows('partners') ): ?>
					<?php while( have_rows('partners') ): the_row();
						$partners_link = get_sub_field('partners_link');
						$partners_logo = get_sub_field('partners_logo');
						?>
						<a href="<?= (!empty($partners_link)) ? $partners_link : 'javascript:;'; ?>" class="partners__item swiper-slide">
							<img src="<?php echo esc_url($partners_logo['url']); ?>" alt="<?php echo esc_attr($partners_logo['alt']); ?>" class="partners__logo">
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- ./ Partners-slider -->

<!-- Partners-info -->
<section class="partners partners--info js-reveal gs-reveal">
	<div style="display: none"></div>
	<div class="partners__body container">
		<h2 class="partners__heading title title--big title--red-gradient title--w-bold center title--indent-large js-reveal gs-reveal a-reveal-left">
			Информационные партнёры
		</h2>
		<div class="partners__items">
			<?php if( have_rows('info-partners') ): ?>
				<?php while( have_rows('info-partners') ): the_row();
					$info_partners_link = get_sub_field('info_partners_link');
					$info_partners_logo = get_sub_field('info_partners_logo');
					?>
					<a href="<?= (!empty($info_partners_link)) ? $info_partners_link : 'javascript:;'; ?>" class="partners__item js-reveal gs-reveal a-reveal-left">
						<img src="<?php echo esc_url($info_partners_logo['url']); ?>" alt="<?php echo esc_attr($info_partners_logo['alt']); ?>" class="partners__logo">
					</a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ./ Partners-info -->

<!-- Dictation-info -->
<section class="dictation dictation--info js-reveal gs-reveal">
	<div class="dictation__body container">
		<h2 class="dictation__heading title title--big title--red-gradient title--w-bold center title--indent-small js-reveal gs-reveal a-reveal-left">
			Правовой диктант
		</h2>
		<div
			class="dictation__text text text--medium text--dark text--w-regular center js-reveal gs-reveal a-reveal-right">
			<?= $dictation; ?>
		</div>
		<div class="dictation__actions center">
			<a href="/diktant" class="dictation__button button button--primary js-reveal gs-reveal a-reveal-left">
				Перейти
			</a>
		</div>
	</div>
</section>
<!-- ./ Dictation-info -->

<!-- Contacts -->
<section class="contacts js-reveal gs-reveal" id="contacts">
	<div class="contacts__body">
		<div class="contacts__inner">
			<div class="contacts__map js-reveal gs-reveal a-reveal-left">
				<script type="text/javascript" charset="utf-8" async
				        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae5b499307d506e7a2192059adeea04207b3c228154678d47417d9e02004ab4ad&amp;width=100%25&amp;height=570&amp;lang=ru_RU&amp;scroll=false"></script>
			</div>
			<div class="contacts__info js-reveal gs-reveal a-reveal-right">
				<div class="contacts__item">
					<div class="contacts__icon">
						<svg class="contacts__svg-icon" width="50" height="50" viewBox="0 0 50 50" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path d="M25 4.6875C20.9826 4.6875 17.0554 5.87881 13.715 8.11077C10.3746 10.3427 7.77111 13.5151 6.23371 17.2267C4.6963 20.9384 4.29405 25.0225 5.07781 28.9628C5.86157 32.903 7.79615 36.5224 10.6369 39.3631C13.4777 42.2039 17.097 44.1384 21.0372 44.9222C24.9775 45.706 29.0616 45.3037 32.7733 43.7663C36.4849 42.2289 39.6573 39.6254 41.8892 36.285C44.1212 32.9446 45.3125 29.0174 45.3125 25C45.3022 19.616 43.1588 14.4554 39.3517 10.6483C35.5446 6.8412 30.384 4.69782 25 4.6875ZM35.2149 16.8164L29.7461 28.9648C29.577 29.3165 29.2853 29.5943 28.9258 29.7461L17.3242 34.7266C17.1315 34.8031 16.9261 34.8428 16.7188 34.8437C16.3031 34.8461 15.9031 34.6847 15.6055 34.3945C15.3849 34.1739 15.2353 33.8923 15.1762 33.586C15.117 33.2797 15.1509 32.9627 15.2734 32.6758L20.2539 21.0742C20.4057 20.7147 20.6835 20.423 21.0352 20.2539L33.1445 14.7461C33.4368 14.6176 33.7611 14.5805 34.0749 14.6398C34.3886 14.6991 34.6771 14.8519 34.9024 15.0781C35.1286 15.2995 35.2802 15.5858 35.3362 15.8974C35.3922 16.2089 35.3498 16.5301 35.2149 16.8164Z" fill="white"/>
						</svg>
					</div>
					<div class="contacts__link text text--medium text--white text--w-regular">
						Город Москва, вн.тер. г. Муниципальный Округ Басманный, пл Спартаковская, дом 14, строение 2, этаж/ком. 2/1
					</div>
				</div>
				<div class="contacts__item">
					<div class="contacts__icon">
						<svg class="contacts__svg-icon" width="50" height="50" viewBox="0 0 50 50" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path d="M43.3594 30.9374L34.1992 27.0311C33.7266 26.8193 33.2077 26.7314 32.6917 26.7758C32.1757 26.8203 31.6795 26.9955 31.25 27.285L26.3477 30.5467C23.3599 29.0956 20.9408 26.6903 19.4727 23.7108L22.7148 18.7499C23.0024 18.3199 23.1781 17.825 23.2258 17.31C23.2736 16.7949 23.1919 16.2761 22.9883 15.8006L19.0625 6.64049C18.7886 6.02196 18.3247 5.50677 17.7382 5.16963C17.1518 4.8325 16.4731 4.69094 15.8008 4.76549C13.1633 5.111 10.741 6.40254 8.98422 8.39998C7.22749 10.3974 6.25586 12.9648 6.25 15.6249C6.25 31.1327 18.8672 43.7499 34.375 43.7499C37.035 43.744 39.6025 42.7724 41.5999 41.0156C43.5973 39.2589 44.8889 36.8366 45.2344 34.1991C45.3089 33.5267 45.1674 32.8481 44.8302 32.2616C44.4931 31.6751 43.9779 31.2113 43.3594 30.9374Z" fill="white"/>
							<path d="M30.7424 9.31607C33.1207 9.96585 35.2885 11.2245 37.0319 12.9679C38.7753 14.7113 40.034 16.8791 40.6838 19.2575C40.77 19.5914 40.9642 19.8874 41.2363 20.0994C41.5083 20.3113 41.8428 20.4274 42.1877 20.4294C42.3265 20.4291 42.4645 20.4094 42.5978 20.3708C42.7965 20.3188 42.9827 20.2277 43.1457 20.1028C43.3087 19.978 43.4451 19.8218 43.5469 19.6436C43.6488 19.4653 43.7141 19.2685 43.7389 19.0647C43.7637 18.8609 43.7476 18.6542 43.6916 18.4567C42.9104 15.544 41.3766 12.8881 39.2442 10.7557C37.1118 8.62327 34.4559 7.08945 31.5431 6.30826C31.3393 6.23401 31.1223 6.20301 30.9058 6.21723C30.6894 6.23146 30.4783 6.2906 30.2859 6.39088C30.0936 6.49117 29.9242 6.63041 29.7886 6.79974C29.653 6.96906 29.5542 7.16476 29.4984 7.37438C29.4426 7.584 29.431 7.80294 29.4645 8.01727C29.4979 8.23159 29.5756 8.43661 29.6926 8.61926C29.8097 8.80191 29.9634 8.95819 30.1442 9.07816C30.3249 9.19813 30.5286 9.27915 30.7424 9.31607Z" fill="white"/>
							<path d="M29.1213 15.3512C30.4433 15.7131 31.6483 16.4131 32.6175 17.3824C33.5867 18.3516 34.2867 19.5565 34.6486 20.8786C34.7318 21.2141 34.9252 21.5121 35.1979 21.7246C35.4706 21.9371 35.8068 22.0518 36.1525 22.0504C36.285 22.0517 36.4169 22.032 36.5431 21.9919C36.7435 21.942 36.9319 21.8525 37.097 21.7285C37.2622 21.6046 37.4007 21.4487 37.5046 21.2702C37.6084 21.0918 37.6753 20.8942 37.7014 20.6894C37.7275 20.4846 37.7122 20.2766 37.6564 20.0778C37.1632 18.2214 36.188 16.5283 34.8298 15.17C33.4716 13.8118 31.7785 12.8367 29.9221 12.3434C29.7182 12.2692 29.5012 12.2382 29.2847 12.2524C29.0683 12.2666 28.8572 12.3258 28.6648 12.426C28.4725 12.5263 28.3031 12.6656 28.1675 12.8349C28.032 13.0042 27.9331 13.1999 27.8773 13.4095C27.8215 13.6192 27.8099 13.8381 27.8434 14.0524C27.8768 14.2667 27.9545 14.4718 28.0716 14.6544C28.1886 14.8371 28.3423 14.9933 28.5231 15.1133C28.7038 15.2333 28.9075 15.3143 29.1213 15.3512Z" fill="white"/>
						</svg>
					</div>
					<a href="tel:+7(927)136-26-60"
					   class="contacts__link contacts__link--adr text text--medium text--white text--w-regular">
						+7 (927) 136-26-60
					</a>
				</div>
				<div class="contacts__item">
					<div class="contacts__icon">
						<svg class="contacts__svg-icon" width="50" height="50" viewBox="0 0 50 50" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path d="M24.9999 4.6875C22.2661 4.69073 19.561 5.24524 17.0465 6.31787C14.5319 7.39049 12.2595 8.9592 10.3651 10.9302C8.47065 12.9012 6.99318 15.234 6.02099 17.789C5.0488 20.3441 4.60186 23.069 4.70691 25.8008C5.11707 36.4844 13.8866 45.0977 24.5897 45.3125C28.1764 45.3824 31.7176 44.5011 34.8532 42.7583C37.9888 41.0156 40.6069 38.4735 42.4413 35.3906C42.5181 35.2625 42.5565 35.1151 42.5521 34.9657C42.5476 34.8164 42.5005 34.6715 42.4162 34.5482C42.3319 34.4249 42.2141 34.3283 42.0766 34.2699C41.9391 34.2115 41.7878 34.1938 41.6405 34.2188C41.0473 34.3235 40.446 34.3758 39.8436 34.375C36.2694 34.375 34.2772 32.8125 33.2225 31.5039C32.979 31.194 32.7571 30.8677 32.5585 30.5273C31.6129 31.8227 30.3509 32.8538 28.893 33.5222C27.4352 34.1905 25.8302 34.4737 24.2317 34.3446C22.6331 34.2155 21.0944 33.6785 19.7627 32.7849C18.4309 31.8913 17.3507 30.6711 16.6252 29.2408C15.8998 27.8105 15.5533 26.218 15.6191 24.6156C15.6849 23.0132 16.1606 21.4544 17.0008 20.0884C17.841 18.7224 19.0176 17.5947 20.4181 16.8132C21.8186 16.0318 23.3961 15.6227 24.9999 15.625C27.31 15.618 29.5392 16.4748 31.2499 18.0273V17.2461C31.2435 16.8406 31.3911 16.4478 31.6629 16.147C31.9348 15.8461 32.3107 15.6596 32.7147 15.625C32.928 15.6116 33.1417 15.6422 33.3427 15.7147C33.5437 15.7872 33.7277 15.9002 33.8833 16.0466C34.0389 16.1931 34.1628 16.3699 34.2473 16.5661C34.3319 16.7623 34.3753 16.9738 34.3749 17.1875V25C34.3749 27.8516 35.3319 31.25 39.8436 31.25C44.3553 31.25 45.2343 28.0859 45.3124 25.293V25C45.3072 19.6144 43.1655 14.4508 39.3573 10.6426C35.5491 6.83439 30.3855 4.69267 24.9999 4.6875Z" fill="white"/>
							<path d="M25 31.25C28.4518 31.25 31.25 28.4518 31.25 25C31.25 21.5482 28.4518 18.75 25 18.75C21.5482 18.75 18.75 21.5482 18.75 25C18.75 28.4518 21.5482 31.25 25 31.25Z" fill="white"/>
						</svg>
					</div>
					<a href="mailto:lawschool@inregions.com"
					   class="contacts__link contacts__link--adr text text--medium text--white text--w-regular">
						lawschool@inregions.com
					</a>
				</div>
				<div class="contacts__item">
					<div class="contacts__icon">
						<svg class="contacts__svg-icon" width="50" height="50" viewBox="0 0 50 50" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path d="M45.1757 6.19175C44.7422 5.82442 44.2173 5.58142 43.6567 5.48856C43.0962 5.39571 42.5209 5.45648 41.9921 5.66441L5.93746 19.8246C5.30506 20.0655 4.7694 20.5076 4.41296 21.0829C4.05651 21.6581 3.89904 22.3346 3.9648 23.0082C4.02347 23.6814 4.29882 24.3175 4.74955 24.8211C5.20029 25.3246 5.80212 25.6685 6.4648 25.8011L15.625 27.6175V39.0628C15.6246 39.682 15.8082 40.2873 16.1525 40.802C16.4968 41.3166 16.9861 41.7174 17.5586 41.9535C17.9374 42.1059 18.3416 42.1854 18.75 42.1878C19.1604 42.1893 19.567 42.1089 19.946 41.9512C20.3249 41.7936 20.6686 41.562 20.957 41.2699L26.0351 36.2113L33.7109 42.9691C34.2776 43.4689 35.0061 43.7464 35.7617 43.7503C36.0939 43.7572 36.4247 43.7043 36.7382 43.5941C37.2537 43.431 37.7176 43.1362 38.0841 42.7389C38.4506 42.3415 38.7071 41.8553 38.8281 41.3285L46.1718 9.25816C46.3002 8.70477 46.2753 8.12686 46.0998 7.58658C45.9243 7.04629 45.6048 6.56406 45.1757 6.19175ZM35.7812 40.6253L19.6875 26.4652L42.8711 9.72691L35.7812 40.6253Z" fill="white"/>
						</svg>
					</div>
					<a href="https://t.me/LegalJuniorcamp"
					   class="contacts__link contacts__link--adr text text--medium text--white text--w-regular"
					   target="_blank">
						LegalJuniorcamp
					</a>
				</div>
				<div class="contacts__item">
					<div class="contacts__icon">
						<svg class="contacts__svg-icon" width="50" height="50" viewBox="0 0 50 50" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M7.08317 7.08366C4.1665 10.0281 4.1665 14.7364 4.1665 24.167V25.8337C4.1665 35.2503 4.1665 39.9587 7.08317 42.917C10.0276 45.8337 14.7359 45.8337 24.1665 45.8337H25.8332C35.2498 45.8337 39.9582 45.8337 42.9165 42.917C45.8332 39.9726 45.8332 35.2643 45.8332 25.8337V24.167C45.8332 14.7503 45.8332 10.042 42.9165 7.08366C39.9721 4.16699 35.2638 4.16699 25.8332 4.16699H24.1665C14.7498 4.16699 10.0415 4.16699 7.08317 7.08366ZM11.1943 16.8476C11.4165 27.6809 16.8332 34.181 26.3332 34.181H26.8888V27.9864C30.3748 28.3337 33.0138 30.8893 34.0692 34.181H38.9998C38.4942 32.3105 37.5975 30.5685 36.3694 29.0697C35.1413 27.5712 33.6094 26.3499 31.8748 25.4864C33.4292 24.5399 34.7717 23.2828 35.8184 21.7941C36.865 20.3053 37.5936 18.6167 37.9582 16.8337H33.4859C32.5138 20.2781 29.6248 23.403 26.8888 23.6947V16.8476H22.4025V28.8476C19.6248 28.153 16.1248 24.792 15.972 16.8476H11.1943Z" fill="white"/>
						</svg>
					</div>
					<a href="https://vk.com/legaljuniorcamp"
					   class="contacts__link contacts__link--adr text text--medium text--white text--w-regular"
					   target="_blank">
						legaljuniorcamp
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ Contacts -->

<?php get_footer(); ?>