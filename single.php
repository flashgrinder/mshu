<?php get_header(); ?>

<?php the_post(); ?>
<style>
    .post__header::before {
        background-image: url('<?=get_the_post_thumbnail_url();?>');
    }
</style>
<!-- News-detail -->
<section class="post js-reveal gs-reveal">
	<article class="post__article">
		<header class="post__header">
			<div class="post__wrap container">
				<h1 class="post__title title title--big title--white title--w-bold js-reveal gs-reveal a-reveal-left">
					<?php the_title(); ?>
				</h1>
			</div>
		</header>
		<div class="post__body container">
			<div class="post__wysiwyg wysiwyg">
				<?php the_content(); ?>
			</div>
		</div>
		<footer class="post__footer container">
			<div class="post__date text text--medium text--dark text--w-regular">
				<?= get_the_date('d.m.Y'); ?>
			</div>
			<div onclick="history.go(-1); return false;" class="post__back text text--medium text--dark text--w-regular">
				Вернуться к списку новостей
			</div>
		</footer>
	</article>
</section>
<!-- ./ News-detail -->

<?php get_footer(); ?>