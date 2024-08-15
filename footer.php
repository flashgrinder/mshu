</main>
<!-- /. MAIN -->
<footer class="footer">
	<div class="footer__body container">
		<div class="footer__inner">
			<div class="footer__company">
				<div class="footer__logo">
					<img src="<?= STANDART_DIR; ?>/img/footer-logo.svg" alt="" class="footer__img-logo">
				</div>
				<a class="footer__creator text text--normal text--white text--w-regular" href="https://fcdigital.ru/" target="_blank">
					<span class="footer__creator-capture">Создание и разработка сайта Fincom Digital</span>
					<img src="<?= STANDART_DIR; ?>/img/fincom-logo.svg" class="footer__creator-logo" width="40" height="40" alt="Логотип Fincom Digital">
				</a>
			</div>

			<div class="footer__info">
				<div class="footer__copy text text--medium text--white text--w-regular">
					© 2024 МШЮ, Все права защищены
				</div>
				<a href="/policy/" class="footer__policy text text--medium text--white text--w-regular">
					Политика конфиденциальности
				</a>
				<a href="<?= STANDART_DIR; ?>/docs/mshu_regulation.pdf" class="footer__regulation text text--medium text--white text--w-regular">Положение о МШЮ</a>
			</div>
		</div>

	</div>
</footer>

<!-- Modal -->
<div class="modal hystmodal" id="participant" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window participant" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal__title title title--medium title--white title--w-bold center">
				Оставить заявку
			</h3>
			<?= do_shortcode('[contact-form-7 id="ef49c61" title="Стать участником" html_class="modal__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Modal -->
<!-- Modal -->
<div class="modal hystmodal" id="mentor" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window mentor" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal__title title title--medium title--white title--w-bold center">
				Оставить заявку
			</h3>
			<?= do_shortcode('[contact-form-7 id="49388cc" title="Стать наставником" html_class="modal__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Modal -->
<!-- Modal -->
<div class="modal hystmodal" id="partner" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window partner" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal__title title title--medium title--white title--w-bold center">
				Оставить заявку
			</h3>
			<?= do_shortcode('[contact-form-7 id="dec28f4" title="Стать партнером" html_class="modal__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Modal -->
<!-- Modal -->
<div class="modal hystmodal" id="participant-camp" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window participant-camp" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal__title title title--medium title--white title--w-bold center">
				Оставить заявку
			</h3>
			<?= do_shortcode('[contact-form-7 id="8e9cf48" title="Стать участником (лагерь МШЮ)" html_class="modal__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Modal -->

<!-- Success -->
<div class="modal modal--success hystmodal js-modal-success" id="success" aria-hidden="true">
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<div class="modal__wrapper-success">
				<div class="modal__success-icon">
					<img src="<?= STANDART_DIR; ?>/img/check-success.svg" alt="Заявка принята" class="modal__success-img">
				</div>
				<div class="modal__success-text text text--medium text--dark text--w-regular">
					Спасибо, ваша заявка принята!
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /. Success -->

<?php wp_footer(); ?>
</body>

</html>