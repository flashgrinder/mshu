<?php /* Template Name: Диктант */ ?>
<?php get_header(); ?>
<?php
$description = get_field('description');
$short_text = get_field('short_text');
?>
<?php the_post(); ?>
<!-- Head-info -->
<section class="head-info js-reveal gs-reveal">
	<div class="head-info__body">
		<div class="head-info__text-decor">
			<h1 class="head-info__heading title title--pre-big title--white title--w-bold js-reveal gs-reveal">Диктант</h1>
			<span class="head-info__heading-decor title title--pre-big title--white title--w-bold js-reveal gs-reveal">Диктант&nbsp;&nbsp;&nbsp;&nbsp;Диктант&nbsp;&nbsp;&nbsp;&nbsp;Диктант&nbsp;&nbsp;&nbsp;&nbsp;Диктант&nbsp;&nbsp;&nbsp;&nbsp;Диктант&nbsp;&nbsp;&nbsp;&nbsp;Диктант</span>

			<div class="head-info__heading-decor-absolute">
				<span class="head-info__heading-decor title title--pre-big title--white title--w-bold js-reveal gs-reveal">Диктант&nbsp;&nbsp;&nbsp;&nbsp;Диктант&nbsp;&nbsp;&nbsp;&nbsp;Диктант</span>
			</div>
		</div>

		<div class="head-info__description container">
			<div class="head-info__text text text--medium text--white text--w-regular js-reveal gs-reveal a-reveal-right">
			<?= $description; ?>
			</div>
		</div>
	</div>
</section>
<!-- ./ Head-info -->

<!-- Stages -->
<section class="stages js-reveal gs-reveal">
	<div class="stages__body container">
		<h2 class="stages__heading title title--big title--black title--w-bold title--indent-small js-reveal gs-reveal a-reveal-left">
			Этапы
		</h2>
		<ol class="stages__list text text--medium text--black text--w-bold">
			<li class="stages__item js-reveal gs-reveal a-reveal-left">
				<div class="stages__head">
					<div class="stages__icon">
						<img class="stages__img" src="<?= STANDART_DIR; ?>/img/stages/icon-1.svg" alt="">
					</div>
					Входное тестирование
				</div>
				<div class="stages__date">
					Январь-Февраль
				</div>
				<div class="stages__description text text--medium text--black text--w-regular text--italic">
					В отборе примут участие 2.000 обучающихся из 50 школ г. Москвы. Тестирование выявляет наиболее подготовленных и заинтересованных участников для дальнейшего прохождения в конкурсе.
				</div>
			</li>
			<li class="stages__item js-reveal gs-reveal a-reveal-right">
				<div class="stages__head">
					<div class="stages__icon">
						<img class="stages__img" src="<?= STANDART_DIR; ?>/img/stages/icon-2.svg" alt="">
					</div>
					Подведение итогов финала 1-го тура. Онлайн бизнес-игра
				</div>
				<div class="stages__date">
					Февраль
				</div>
				<div class="stages__description text text--medium text--black text--w-regular text--italic">
					500 человек, прошедших отбор, выполнят серию заданий и будут соревноваться друг с другом, продемонстрировав свои знания и навыки в области предпринимательства
				</div>
			</li>
			<li class="stages__item js-reveal gs-reveal a-reveal-left">
				<div class="stages__head">
					<div class="stages__icon">
						<img class="stages__img" src="<?= STANDART_DIR; ?>/img/stages/icon-3.svg" alt="">
					</div>
					Видеопрезентация проектов, награждение победителей
				</div>
				<div class="stages__date">
					Март-Апрель
				</div>
				<div class="stages__description text text--medium text--black text--w-regular text--italic">
					В рамках конкурса 100 участников, успешно завершившие 2-й этап, представят свои бизнес-идеи в формате видеороликов.
					<br>
					10 экспертов отберут по 1 проекту для дальнейшей проработки в формате наставничества.
				</div>
			</li>
		</ol>
		<div class="stages__actions">
			<a href="javascript:;" class="stages__button button button--primary" data-modal="#participant">
				Принять участие
			</a>
		</div>
	</div>
</section>
<!-- ./Stages -->

<!-- Short-text -->
<div class="short-text js-reveal gs-reveal">
	<div class="short-text__body container">
		<div class="short-text__description text text--medium text--white text--w-regular">
			<?= $short_text; ?>
		</div>
	</div>
</div>
<!-- ./Short-text -->

<!-- Team -->
<section class="team js-reveal gs-reveal">
	<div class="team__body container">
		<h2 class="team__heading title title--big title--black title--w-bold center title--indent-large js-reveal gs-reveal a-reveal-left">
			Экспертный совет
		</h2>
		<div class="team__items">
			<?php if (have_rows('team')) : ?>
				<?php while (have_rows('team')) : the_row();

					$team_photo = get_sub_field('team_photo');
					$team_name = get_sub_field('team_name');
					$team_description = get_sub_field('team_description');

				?>
					<article class="team__item js-reveal gs-reveal a-reveal-left">
						<div class="team__card team__side--front">
							<?php if (!empty($team_photo)) : ?>
								<img src="<?= esc_url($team_photo['url']); ?>" class="team__img" alt="<?= esc_url($team_photo['alt']); ?>">
							<?php endif; ?>
							<h3 class="team__name text text--medium text--white text--w-bold center">
								<?= $team_name; ?>
							</h3>
						</div>
						<div class="team__card team__side--back text text--dark text--w-bold">
							<?= $team_description; ?>
						</div>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ./ Team -->

<?php get_footer(); ?>