<?php get_header(); ?>
	<!-- News-detail -->
	<section class="post js-reveal gs-reveal">
		<article class="post__article">
			<header class="post__header">
				<div class="post__wrap container">
					<h1 class="post__title title title--large title--white title--w-bold js-reveal gs-reveal a-reveal-left">
						<?php the_title(); ?>
					</h1>
				</div>
			</header>
			<div class="post__body container">
				<div class="post__wysiwyg wysiwyg">
					<?php the_content(); ?>
				</div>
			</div>
		</article>
	</section>
	<!-- ./ News-detail -->
<?php get_footer(); ?>