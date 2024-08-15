<?php /* Template Name: Лагерь МШЮ */ ?>
<?php get_header(); ?>

<!-- Head-info -->
<section class="head-info head-info--camp js-reveal gs-reveal">
    <div class="head-info__body container">
        <h1
            class="head-info__heading title title--big title--white title--w-bold title--indent-small js-reveal gs-reveal a-reveal-left">
            <?php echo esc_html(get_field('head-info_heading')); ?>
        </h1>
        <?php
        $head_info_description = get_field('head-info_description');
        if (!empty($head_info_description)) :
        ?>
            <div
                class="head-info__description text text--medium text--white text--w-regular js-reveal gs-reveal a-reveal-left">
                <?php echo wp_kses_post($head_info_description); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- ./ Head-info -->

<div class="camp-blocks-wrapper">
    <!-- Participants -->
    <?php
    $participants_heading = get_field('participants_heading');
    $participants_description = get_field('participants_description');
    if ((!empty($participants_heading)) && (!empty($participants_description))) :
    ?>
        <section class="participants js-reveal gs-reveal">
            <div class="participants__body container">
                <h2
                    class="participants__heading title title--big title--black title--w-bold title--indent-small js-reveal gs-reveal a-reveal-right">
                    <?php echo esc_html($participants_heading); ?>
                </h2>
                <div
                    class="participants__description text--medium text--black text--w-regular text--italic js-reveal gs-reveal a-reveal-right">
                    <?php echo wp_kses_post($participants_description); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ./Participants -->

    <!-- Camp-stages -->
    <?php if (have_rows('camp-stages_repeater')) : ?>
        <section class="camp-stages js-reveal gs-reveal">
            <div class="camp-stages__body container">
                <?php
                $camp_stages_heading = get_field('camp-stages_heading');
                if (!empty($camp_stages_heading)) :
                ?>
                    <h2
                        class="camp-stages__heading title title--big title--black title--w-bold title--indent-small js-reveal gs-reveal a-reveal-left">
                        <?php echo esc_html($camp_stages_heading); ?>
                    </h2>
                <?php endif; ?>
                <ol class="camp-stages__list text text--medium text--black text--w-bold">
                    <?php while (have_rows('camp-stages_repeater')) : the_row();
                        $camp_stages_repeater_description = get_sub_field('camp-stages_repeater_description');
                        if (!empty($camp_stages_repeater_description)) :
                    ?>
                        <li class="camp-stages__item js-reveal gs-reveal a-reveal-left">
                            <div class="camp-stages__head">Этап</div>
                            <div class="camp-stages__description text--medium text--black text--w-regular text--italic">
                                <?php echo wp_kses_post($camp_stages_repeater_description); ?>
                            </div>
                        </li>
                    <?php endif; endwhile; ?>
                </ol>
            </div>
        </section>
    <?php endif; ?>
    <!-- ./Camp-stages -->
</div>

<!-- Lawsuit -->
<?php
$lawsuit_heading = get_field('lawsuit_heading');
$lawsuit_description = get_field('lawsuit_description');
if ((!empty($lawsuit_heading)) && (!empty($lawsuit_description))) :
?>
    <section class="lawsuit js-reveal gs-reveal">
        <div class="lawsuit__body">
            <div class="lawsuit__wrapper container">
                <h2
                    class="lawsuit__heading title title--big title--black title--w-bold title--indent-small js-reveal gs-reveal a-reveal-right">
                    <?php echo esc_html($lawsuit_heading); ?>
                </h2>
                <div
                    class="lawsuit__description text--medium text--black text--w-regular text--italic js-reveal gs-reveal a-reveal-right">
                    <?php echo wp_kses_post($lawsuit_description); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- ./Lawsuit -->

<div class="blocks-team-wrapper">
    <!-- Mentors -->
    <section class="mentors js-mentors-init">
        <div class="mentors__body container">
            <div class="mentors__tabs tabs">
                <div class="mentors__head-wrap title--indent-large">
                    <h2 class="mentors__heading title title--big title--white title--w-bold">
                        Спикеры летнего правового лагеря МШЮ
                    </h2>
                </div>
                <div class="mentors__tabs-wrapper tabs__wrapper">
                    <div class="mentors__outer tabs__content is-open js-slider-mentors-init"
                        data-tab-content="slider-1">
                        <div class="mentors__slider-wrap">
                            <?php if (have_rows('mentors-slider')) : ?>
                                <div class="mentors__swiper mentors__swiper--text js-mentors-slider-text swiper">
                                    <div class="mentors__items swiper-wrapper">
                                        <?php while (have_rows('mentors-slider')): the_row();
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
                            <?php if (have_rows('mentors-slider')): ?>
                                <div class="mentors__swiper mentors__swiper--photo js-mentors-slider-photo swiper">
                                    <div class="mentors__items swiper-wrapper">
                                        <?php while (have_rows('mentors-slider')): the_row();
                                            $mentors_slider_photo = get_sub_field('mentors-slider_photo');
                                        ?>
                                            <div class="mentors__slide swiper-slide">
                                                <img src="<?php echo esc_url($mentors_slider_photo['url']); ?>" alt="<?php echo esc_attr($mentors_slider_photo['alt']); ?>" class="mentors__img">
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <div class="news-slider__arrows slider-arrows slider-nav">
                                        <div
                                            class="swiper-button-prev news-slider__arrow news-slider__arrow--prev slider-arrows__arrow slider-arrows__arrow--prev js-slider-prev">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19 12H5" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M12 19L5 12L12 5" stroke="#EFEFEF" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                        <div
                                            class="news-slider__pagination swiper-pagination slider-pagination js-mentors-slider-pagination">
                                        </div>

                                        <div
                                            class="swiper-button-next news-slider__arrow news-slider__arrow--next slider-arrows__arrow slider-arrows__arrow--next js-slider-next">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#EFEFEF" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#EFEFEF" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ./ Mentors -->
</div>

<!-- Camp-member -->
<section class="camp js-reveal gs-reveal">
    <div class="camp__body container">
        <?php
        $camp_heading = get_field('camp_heading');
        if (!empty($camp_heading)) :
        ?>
            <h2 class="camp__heading title title--big title--black title--w-bold center title--indent-small js-reveal gs-reveal a-reveal-left">
                <?php echo esc_html($camp_heading); ?>
            </h2>
        <?php endif; ?>
        <?php
        $camp_text = get_field('camp_text');
        if (!empty($camp_text)) :
        ?>
            <div class="camp__text text text--medium text--dark text--w-regular center js-reveal gs-reveal a-reveal-left">
                <?php echo wp_kses_post($camp_text); ?>
            </div>
        <?php endif; ?>
        <div class="camp__actions center">
            <a href="javascript:;" class="camp__button button button--primary js-reveal gs-reveal a-reveal-left" data-modal="#partner">
                Стать партнером
            </a>
            <a href="javascript:;" class="camp__button button button--primary js-reveal gs-reveal a-reveal-right" data-modal="#participant-camp">
                Стать участником
            </a>
        </div>
    </div>
</section>
<!-- ./ Dictation-member -->

<?php get_footer(); ?>