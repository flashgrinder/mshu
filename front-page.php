<?php /* Template Name: Главная */ ?>
<?php get_header(); ?>
<?php
$about = get_field('about');
$dictation = get_field('dictation');
?>
<div class="main-blocks-wrapper">
	<!-- Main-screen -->
	<section class="main-screen js-reveal gs-reveal">
		<div class="main-screen__body container">

			<img src="<?= STANDART_DIR; ?>/img/main-screen/main-screen-decor.svg" alt="Декоративный элемент" class="main-screen__img-decor-1">
			<img src="<?= STANDART_DIR; ?>/img/main-screen/main-screen-decor.svg" alt="Декоративный элемент" class="main-screen__img-decor-2">

			<img src="<?= STANDART_DIR; ?>/img/main-screen/girls.png" alt="Декоративный элемент" class="main-screen__img-girls">

			<div class="main-screen__inner">
				<h1
					class="main-screen__heading title title--pre-large title--white title--w-bold title--indent-small js-reveal gs-reveal a-reveal-left">
					Молодежная школа юриста
				</h1>
				<ul class="main-screen__info-list">
					<li
						class="main-screen__info-item text text--upper-medium text--white text--w-regular js-reveal gs-reveal a-reveal-right">
						Получи уникальные знания от лучших экспертов страны
					</li>
					<li
						class="main-screen__info-item text text--upper-medium text--white text--w-regular js-reveal gs-reveal a-reveal-right">
						Стань успешным и измени мир вокруг себя
					</li>
					<li
						class="main-screen__info-item text text--upper-medium text--white text--w-regular js-reveal gs-reveal a-reveal-right">
						Погрузись в будущую профессию
					</li>
				</ul>
			</div>

		</div>
		<div class="main-screen__wrap-logos container">
			<div class="main-screen__logos">
				<img src="<?= STANDART_DIR; ?>/img/main-screen/logo-1.svg" width="89" height="33" alt="Логотип уполномоченного по защите прав предпринимателей в г.Москве" class="main-screen__img">
				<img src="<?= STANDART_DIR; ?>/img/main-screen/logo-2.svg" width="125" height="33" alt="Логотип Института правовой грамотности и поддержки предпринимательства" class="main-screen__img">
				<img src="<?= STANDART_DIR; ?>/img/main-screen/logo-3.svg" width="90" height="33" alt="Логотип Ассоциации юристов России" class="main-screen__img">
			</div>
		</div>
	</section>
	<!-- ./ Main-screen -->

	<!-- Dictation-about -->
	<section class="dictation dictation--about js-reveal gs-reveal">
		<div class="dictation__body container">
			<h2
				class="dictation__heading title title--big title--black title--w-bold left title--indent-small js-reveal gs-reveal a-reveal-left">
				О программе
			</h2>
			<div class="dictation__inner" <?php if (!empty($quotes)) echo 'style="display: grid;"'; ?>>
				<div class="dictation__info">
					<div
						class="dictation__text text text--medium text--dark text--w-regular left js-reveal gs-reveal a-reveal-right">
						<?= $about; ?>
					</div>
					<div class="dictation__actions left">
						<a href="javascript:;" class="dictation__button button button--primary js-reveal gs-reveal" data-modal="#participant">
							Присоединиться
						</a>
					</div>
				</div>
				<?php if (!empty($quotes)) : ?>
					<div class="dictation__opinion">
						<img src="" alt="" class="dictation__photo">
						<div class="dictation__quote">
							<p class="dictation__quote-text text text--upper-small text--dark text--w-regular"></p>
						</div>
						<div class="dictation__mentor">
							<span class="dictation__mentor-name text text--normal text--red text--w-regular"></span>
							<span class="dictation__mentor-position text text--normal text--black text--w-regular"></span>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- ./ Dictation-about -->
</div>

<!-- Combine -->
<section class="combine js-reveal gs-reveal">
	<div class="combine__body">
		<div class="combine__wrapper-decor">
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
		<div class="combine__wrap">
			<div class="combine__info"></div>
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
			<li class="tasks__item js-reveal gs-reveal a-reveal-right">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17.5 17.5C24.1447 17.5 29.5312 14.5619 29.5312 10.9375C29.5312 7.31313 24.1447 4.375 17.5 4.375C10.8553 4.375 5.46875 7.31313 5.46875 10.9375C5.46875 14.5619 10.8553 17.5 17.5 17.5Z" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M5.46875 10.9375V17.5C5.46875 21.123 10.8555 24.0625 17.5 24.0625C24.1445 24.0625 29.5312 21.123 29.5312 17.5V10.9375" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M5.46875 17.5V24.0625C5.46875 27.6855 10.8555 30.625 17.5 30.625C24.1445 30.625 29.5312 27.6855 29.5312 24.0625V17.5" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				Раскрыть вопросы финансово-правовой грамотности
			</li>
			<li class="tasks__item js-reveal gs-reveal a-reveal-left">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.7656 21.875C19.2961 21.875 22.9688 18.2023 22.9688 13.6719C22.9688 9.14141 19.2961 5.46875 14.7656 5.46875C10.2352 5.46875 6.5625 9.14141 6.5625 13.6719C6.5625 18.2023 10.2352 21.875 14.7656 21.875Z" stroke="#3E3E3E" stroke-width="2" stroke-miterlimit="10" />
						<path d="M3.03516 27.3437C4.47242 25.6307 6.26742 24.2533 8.29399 23.3082C10.3206 22.3632 12.5295 21.8734 14.7656 21.8734C17.0017 21.8734 19.2107 22.3632 21.2373 23.3082C23.2638 24.2533 25.0588 25.6307 26.4961 27.3437" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M30.0781 20.7812C31.2862 20.7812 32.2656 19.8019 32.2656 18.5938C32.2656 17.3856 31.2862 16.4062 30.0781 16.4062C28.87 16.4062 27.8906 17.3856 27.8906 18.5938C27.8906 19.8019 28.87 20.7812 30.0781 20.7812Z" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M30.0781 16.4062V14.7656" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M28.1777 17.5L26.7695 16.6797" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M28.1777 19.6875L26.7695 20.5078" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M30.0781 20.7812V22.4219" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M31.9785 19.6875L33.3867 20.5078" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M31.9785 17.5L33.3867 16.6797" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				Провести раннюю профориентацию для школьников
			</li>
			<li class="tasks__item js-reveal gs-reveal a-reveal-right">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.0312 21.875C15.9576 21.875 19.1406 18.692 19.1406 14.7656C19.1406 10.8392 15.9576 7.65625 12.0312 7.65625C8.10485 7.65625 4.92188 10.8392 4.92188 14.7656C4.92188 18.692 8.10485 21.875 12.0312 21.875Z" stroke="#3E3E3E" stroke-width="2" stroke-miterlimit="10" />
						<path d="M21.2461 7.91602C21.8746 7.74557 22.5227 7.65823 23.1738 7.65625C25.0594 7.65625 26.8676 8.40527 28.2009 9.73854C29.5342 11.0718 30.2832 12.8801 30.2832 14.7656C30.2832 16.6511 29.5342 18.4594 28.2009 19.7927C26.8676 21.126 25.0594 21.875 23.1738 21.875" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M2.1875 26.9883C3.29758 25.4086 4.77154 24.1193 6.48485 23.2292C8.19817 22.3392 10.1005 21.8745 12.0312 21.8745C13.962 21.8745 15.8643 22.3392 17.5776 23.2292C19.291 24.1193 20.7649 25.4086 21.875 26.9883" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M23.1738 21.875C25.1047 21.8738 27.0075 22.3379 28.721 23.228C30.4345 24.118 31.9083 25.4079 33.0176 26.9883" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				Внедрить систему наставничества
			</li>
			<li class="tasks__item js-reveal gs-reveal a-reveal-left">
				<div class="tasks__icon">
					<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4.375 29.5312V7.65625C4.375 7.36617 4.49023 7.08797 4.69535 6.88285C4.90047 6.67773 5.17867 6.5625 5.46875 6.5625H29.5312C29.8213 6.5625 30.0995 6.67773 30.3046 6.88285C30.5098 7.08797 30.625 7.36617 30.625 7.65625V29.5312L26.25 27.3438L21.875 29.5312L17.5 27.3438L13.125 29.5312L8.75 27.3438L4.375 29.5312Z" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M9.84375 21.875L14.2188 13.125L18.5938 21.875" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M10.9375 19.6875H17.5" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M20.7812 17.5H26.25" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M23.5156 14.7656V20.2344" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
						<h2 class="counsel__heading title title--big title--black title--w-bold <?php if (!empty($counsel_block_description)): ?>title--indent-small<?php else: ?>title--indent-large<?php endif; ?> js-reveal gs-reveal a-reveal-left">
							<?= $counsel_block_title; ?>
						</h2>
						<?php if (!empty($counsel_block_description)): ?>
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
									<div class="counsel__item js-reveal gs-reveal <?= (++$count % 2 ? 'a-reveal-left' : 'counsel__item--revert a-reveal-right') ?>">
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
										<?php if (!empty($counsel_description)): ?>
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
		<div class="mentors__body">
			<div class="mentors__tabs tabs">
				<div class="mentors__head-wrap title--indent-large container">
					<h2 class="mentors__heading title title--big title--white title--w-bold">
						Наставники и спикеры
					</h2>
					<div class="mentors__location text text--large text--white">Город: <a href="javascript:;" class="mentors__selected-city text--white text--w-bold" data-city-modal="#location" data-tab-trigger="1"></a></div>
				</div>

				<div class="mentors__tabs-wrapper tabs__wrapper">
					<?php if (have_rows('mentors')): ?>
						<?php while (have_rows('mentors')): the_row(); ?>
							<div class="mentors__outer tabs__content <?php if (get_row_index() == 1) echo 'is-open'; ?> js-slider-mentors-init" data-tab-content="<?= get_row_index(); ?>">
								<div class="mentors__slider-wrap">
									<?php if (have_rows('mentors-slider')): ?>
										<!-- Слайдер 1 -->
										<div class="mentors__swiper mentors__swiper--photo js-mentors-slider-photo swiper">
											<!-- Обертка 1 -->
											<div class="mentors__items swiper-wrapper">
												<?php while (have_rows('mentors-slider')): the_row();
													$mentors_slider_photo = get_sub_field('mentors-slider_photo');
												?>
													<!-- Слайды 1го слайдера -->
													<div class="mentors__slide swiper-slide">
														<img src="<?php echo esc_url($mentors_slider_photo['url']); ?>" alt="<?php echo esc_attr($mentors_slider_photo['alt']); ?>" class="mentors__img">
													</div>
												<?php endwhile; ?>
											</div>
											<div class="mentors-slider__arrows slider-arrows">
												<div
													class="swiper-button-prev mentors-slider__arrow mentors-slider__arrow--prev slider-arrows__arrow slider-arrows__arrow--prev js-slider-prev">
													<svg width="11" height="20" viewBox="0 0 11 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M10 1L1 10L10 19" stroke="white" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</div>
												<div
													class="swiper-button-next mentors-slider__arrow mentors-slider__arrow--next slider-arrows__arrow slider-arrows__arrow--next js-slider-next">
													<svg width="11" height="20" viewBox="0 0 11 20" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path d="M1 19L10 10L1 1" stroke="white" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>

								<div class="mentors__slider-wrap container">
									<?php if (have_rows('mentors-slider')): ?>
										<!-- Слайдер 2 -->
										<div class="mentors__swiper mentors__swiper--text js-mentors-slider-text swiper">
											<!-- Обертка 2 -->
											<div class="mentors__items swiper-wrapper">
												<?php while (have_rows('mentors-slider')): the_row();
													$mentors_slider_name = get_sub_field('mentors-slider_name');
													$mentors_slider_quote = get_sub_field('mentors-slider_quote');
													$mentors_slider_text = get_sub_field('mentors-slider_text');
												?>
													<!-- Слайды 2го слайдера -->
													<div class="mentors__slide swiper-slide">
														<div class="mentors__inner">
															<h3 class="mentors__name title title--big title--white title--w-bold">
																<?= $mentors_slider_name; ?>
															</h3>
															<?php if (!empty($mentors_slider_quote)) : ?>
																<div
																	class="mentors__quote text text--medium text--white text--italic text--w-regular">
																	<?= $mentors_slider_quote; ?>
																</div>
															<?php endif; ?>
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
			<a href="javascript:;" class="dictation__button button button--primary js-reveal gs-reveal" data-modal="#participant">
				Участник
			</a>
			<a href="javascript:;" class="dictation__button button button--primary js-reveal gs-reveal" data-modal="#mentor">
				Наставник
			</a>
		</div>
	</div>
</section>
<!-- ./ Dictation-member -->

<!-- Video -->
<?php if (have_rows('video')): ?>
	<section class="video-slider js-reveal gs-reveal">
		<h2
			class="video-slider__header title title--big title--black title--w-bold center title--indent-small js-reveal gs-reveal a-reveal-left">
			Видео МШЮ
		</h2>

		<div class="video-slider__swiper js-video-slider swiper">
			<div class="video-slider__items swiper-wrapper">
				<?php while (have_rows('video')): the_row();
					$video_link = get_sub_field('video_link');
					if (!empty($video_link)) :
				?>
						<div class="video-slider__item swiper-slide">
							<iframe class="video-slider__player" width="100%" height="100%" src="<?php echo esc_url($video_link); ?>" frameBorder="0" allow="clipboard-write" webkitAllowFullScreen mozallowfullscreen allowFullScreen loading="lazy"></iframe>
						</div>
				<?php endif;
				endwhile; ?>
			</div>
			<div class="video-slider__arrows slider-arrows">
				<div
					class="swiper-button-prev video-slider__arrow video-slider__arrow--prev slider-arrows__arrow slider-arrows__arrow--prev js-slider-prev">
					<svg width="11" height="20" viewBox="0 0 11 20" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M10 1L1 10L10 19" stroke="white" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div
					class="swiper-button-next video-slider__arrow video-slider__arrow--next slider-arrows__arrow slider-arrows__arrow--next js-slider-next">
					<svg width="11" height="20" viewBox="0 0 11 20" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1 19L10 10L1 1" stroke="white" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- ./ Video -->

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
				<?php if (have_rows('partners')): ?>
					<?php while (have_rows('partners')): the_row();
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
	<div class="partners__body container">
		<h2 class="partners__heading title title--big title--red-gradient title--w-bold center title--indent-large js-reveal gs-reveal a-reveal-left">
			Информационные партнёры
		</h2>
		<div class="partners__items">
			<?php if (have_rows('info-partners')): ?>
				<?php while (have_rows('info-partners')): the_row();
					$info_partners_link = get_sub_field('info_partners_link');
					$info_partners_logo = get_sub_field('info_partners_logo');
				?>
					<a href="<?= (!empty($info_partners_link)) ? $info_partners_link : 'javascript:;'; ?>" class="partners__item js-reveal gs-reveal a-reveal-right">
						<img src="<?php echo esc_url($info_partners_logo['url']); ?>" alt="<?php echo esc_attr($info_partners_logo['alt']); ?>" class="partners__logo">
					</a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ./ Partners-info -->

<!-- MSHU in numbers -->
<section class="numbers js-reveal gs-reveal">
	<div class="numbers__body container">
		<h2
			class="numbers__heading title title--big title--white title--w-bold center title--indent-large js-reveal gs-reveal a-reveal-left">
			МШЮ в цифрах</h2>
		<ul class="numbers__list">
			<li class="numbers__item">
				<span class="numbers__number text text--giant text--white text--w-bold js-reveal gs-reveal a-reveal-right">3</span>
				<span
					class="numbers__unit text text--pre-pre-large text--white text--w-semibold center js-reveal gs-reveal a-reveal-right">Региона</span>
			</li>
			<li class="numbers__item">
				<span class="numbers__number text text--giant text--white text--w-bold js-reveal gs-reveal a-reveal-right">4</span>
				<span
					class="numbers__unit text text--pre-pre-large text--white text--w-semibold center js-reveal gs-reveal a-reveal-right">Ведущих
					ВУЗа страны</span>
			</li>
			<li class="numbers__item">
				<span class="numbers__number text text--giant text--white text--w-bold js-reveal gs-reveal a-reveal-right">400+</span>
				<span
					class="numbers__unit text text--pre-pre-large text--white text--w-semibold center js-reveal gs-reveal a-reveal-right">Участников</span>
			</li>
			<li class="numbers__item">
				<span class="numbers__number text text--giant text--white text--w-bold js-reveal gs-reveal a-reveal-right">70+</span>
				<span
					class="numbers__unit text text--pre-pre-large text--white text--w-semibold center js-reveal gs-reveal a-reveal-right">Наставников</span>
			</li>
		</ul>
	</div>
</section>
<!-- ./ MSHU in numbers -->

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

<!-- News -->
<section class="news js-reveal gs-reveal">
	<div class="news__body container">
		<h2 class="news__heading title title--big title--red-gradient title--w-bold center title--indent-large js-reveal gs-reveal a-reveal-left">
			Новости
		</h2>

		<ul class="news__list">
			<?php
			global $post;
			$main_list = new WP_Query(array(
				'post_type'   => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'suppress_filters' => true
			));
			?>
			<?php if ($main_list->have_posts()) :
				while ($main_list->have_posts()) : $main_list->the_post(); ?>

					<li class="news__item" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>">
						<a class="news__link" href="<?php the_permalink(); ?>">
							<h3 class="news__subheading title title--upper-medium title--white title--w-bold"><?php the_title(); ?></h3>
						</a>
					</li>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

			<li class="news__item news__item--all-news">
				<span class="text text--pre-large text--white text--w-bold">Все новости</span>
				<a class="news__link news__link--all-news" href="<?= get_permalink(get_option('page_for_posts', true)); ?>" aria-label="Посмотреть все новости">
					<svg class="news__icon" width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<path
							d="M25 .625A24.375 24.375 0 1 0 49.375 25 24.422 24.422 0 0 0 25 .625Zm11.11 25.102a2.037 2.037 0 0 1-.422.609l-7.946 7.945a1.781 1.781 0 0 1-1.312.54 1.828 1.828 0 0 1-1.336-.54 1.875 1.875 0 0 1 0-2.648l4.758-4.758H15.625a1.875 1.875 0 1 1 0-3.75h14.227l-4.758-4.758a1.875 1.875 0 0 1 2.648-2.648l7.945 7.945c.177.176.32.382.422.61.188.466.188.986 0 1.453Z"
							fill="#fff" />
					</svg>
				</a>
			</li>
		</ul>
	</div>
</section>
<!-- ./ News -->
<?php get_footer(); ?>