<?php /* Template Name: Команда */ ?>
<?php get_header(); ?>

<!-- Head-info -->
<section class="head-info head-info--camp js-reveal gs-reveal">
    <div class="head-info__body">
        <div class="head-info__text-decor">
            <h1 class="head-info__heading title title--pre-big title--white title--w-bold js-reveal gs-reveal">Команда
            </h1>
            <span
                class="head-info__heading-decor title title--pre-big title--white title--w-bold js-reveal gs-reveal">Команда&nbsp;&nbsp;&nbsp;&nbsp;Команда&nbsp;&nbsp;&nbsp;&nbsp;Команда&nbsp;&nbsp;&nbsp;&nbsp;Команда&nbsp;&nbsp;&nbsp;&nbsp;Команда</span>

            <div class="head-info__heading-decor-absolute">
                <span
                    class="head-info__heading-decor title title--pre-big title--white title--w-bold js-reveal gs-reveal">Команда&nbsp;&nbsp;&nbsp;&nbsp;Команда</span>
            </div>
        </div>
    </div>
</section>
<!-- ./ Head-info -->

<!-- Team -->
<section class="team team--mshu js-reveal gs-reveal">
	<div class="team__body container">
		<div class="team__items">
			<?php if (have_rows('team')) : ?>
				<?php while (have_rows('team')) : the_row();

					$team_photo = get_sub_field('team_photo');
					$team_name = get_sub_field('team_name');
					$team_position = get_sub_field('team_position');

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
						<div class="team__position text text--dark text--w-bold">
							<?= $team_position; ?>
						</div>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ./ Team -->

<!-- Short-text -->
<?php
$short_text = get_field('short_text');
if (!empty($short_text)) :
?>
<div class="short-text js-reveal gs-reveal">
	<div class="short-text__body container">
		<div class="short-text__description text text--medium text--white text--w-regular">
			<?php echo wp_kses_post($short_text); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- ./Short-text -->

<!-- Map -->
<div class="map container">
    <div class="map__heading title title--big title--black title--w-bold left title--indent-small js-reveal gs-reveal a-reveal-left">4 региона страны:</div>
    <picture>
        <source media="(min-width: 1201px)" srcset="<?= STANDART_DIR; ?>/img/team/desktop-map.png">
        <img class="map__pic" src="<?= STANDART_DIR; ?>/img/team/mobile-map.png"
            alt="Карта России с обозначением областей присутствия МШЮ">
    </picture>
    <ul class="map__cities">
        <li class="map__city text text--medium text--dark text--w-bold js-reveal gs-reveal a-reveal-right">Саратов</li>
        <li class="map__city text text--medium text--dark text--w-bold js-reveal gs-reveal a-reveal-right">Москва и Московская область</li>
        <li class="map__city text text--medium text--dark text--w-bold js-reveal gs-reveal a-reveal-right">Казань</li>
        <li class="map__city text text--medium text--dark text--w-bold js-reveal gs-reveal a-reveal-right">Уфа</li>
    </ul>
</div>
<!-- ./Map -->

<?php get_footer(); ?>