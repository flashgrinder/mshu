</main>
<!-- /. MAIN -->
<footer class="footer" id="footer">
	<div class="footer__body container">
		<div class="footer__inner">
			<div class="footer__columns-1">
				<div class="footer__logo">
					<img src="<?= STANDART_DIR; ?>/img/footer-logo.svg" width="146" height="41" alt="Логотип МШЮ"
						class="footer__img-logo">
				</div>
				<div class="footer__contacts contacts">
					<ul class="contacts__list">
					<li class="contacts__item">
							<a class="contacts__link" href="https://rutube.ru/channel/42931625/?ysclid=m4lj2jzf8i252707496" aria-label="RuTube">
								<img src="<?= STANDART_DIR; ?>/img/contacts/shortcut-rutube.svg" width="36" height="36"
									class="contacts__icon">
							</a>
						</li>
						<li class="contacts__item">
							<a class="contacts__link" href="tel:+74994506030" aria-label="Телефон">
								<img src="<?= STANDART_DIR; ?>/img/contacts/shortcut-phone.svg" width="36" height="36"
									class="contacts__icon">
							</a>
						</li>
						<li class="contacts__item">
							<a class="contacts__link" href="mailto:info@law-school.ru"
								aria-label="Электронная почта">
								<img src="<?= STANDART_DIR; ?>/img/contacts/shortcut-mail.svg" width="36" height="36"
									class="contacts__icon">
							</a>
						</li>
						<li class="contacts__item">
							<a class="contacts__link" href="https://t.me/LegalJuniorcamp" aria-label="Telegram">
								<img src="<?= STANDART_DIR; ?>/img/contacts/shortcut-telegram.svg" width="36" height="36"
									class="contacts__icon">
							</a>
						</li>
						<li class="contacts__item">
							<a class="contacts__link" href="https://vk.com/legaljuniorcamp" aria-label="Вконтакте">
								<img src="<?= STANDART_DIR; ?>/img/contacts/shortcut-vk.svg" width="36" height="36"
									class="contacts__icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer__columns-2">
				<div class="footer__address text text--medium text--white text--w-regular">
					Г.&nbsp;Москва, ул.&nbsp;Бауманская, офис&nbsp;300
				</div>
				<div class="footer__info">

					<div class="footer__copy text text--medium text--white text--w-regular">
						© <?php echo current_time('Y'); ?> МШЮ, Все права защищены
					</div>
					<a href="/policy/" class="footer__policy text text--medium text--white text--w-regular">
						Политика конфиденциальности
					</a>
					<a href="<?= STANDART_DIR; ?>/docs/mshu_regulation.pdf"
						class="footer__regulation text text--medium text--white text--w-regular">Положение о МШЮ</a>
				</div>
			</div>
		</div>
		<a class="footer__creator text text--normal text--white text--w-regular" href="https://fcdigital.ru/"
			target="_blank">
			<span class="footer__creator-capture">Создание и разработка сайта Fincom Digital</span>
			<img src="<?= STANDART_DIR; ?>/img/fincom-logo.svg" class="footer__creator-logo" width="40" height="40"
				alt="Логотип Fincom Digital">
		</a>
	</div>
</footer>

<!-- Modal -->
<div class="modal hystmodal" id="participant" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
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
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
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
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal__title title title--medium title--white title--w-bold center">
				Оставить заявку
			</h3>
			<?= do_shortcode('[contact-form-7 id="dec28f4" title="Стать партнером (лагерь МШЮ)" html_class="modal__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Modal -->
<!-- Modal -->
<div class="modal hystmodal" id="participant-camp" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
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
<!-- Modal -->
<div class="modal hystmodal" id="registration" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal__title title title--medium title--white title--w-bold center">
				Оставить заявку
			</h3>
			<?= do_shortcode('[contact-form-7 id="d5fa463" title="Зарегистрироваться" html_class="modal__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Modal -->
<!-- Modal -->
<div class="modal hystmodal" id="location" aria-hidden="true">
	<div class="hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal__title title title--medium title--white title--w-bold center">
				Выберите город
			</h3>
			<form class="modal__search">
				<input class="modal__input" type="text" name="city" placeholder="Поиск" aria-label="Поиск" required>
			</form>
			<p class="modal__message"></p>
			<ul class="modal__list"></ul>
		</div>
	</div>
</div>

<template id="element-template">
	<li class="modal__item">
		<button class="modal__city-button text text--normal text--white"></button>
	</li>
</template>
<!-- /. Modal -->

<!-- Success -->
<div class="modal modal--success hystmodal js-modal-success" id="success" aria-hidden="true">
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
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

<!-- Cookie -->
<div class="cookie-container hidden">
    <div class="cookie-popup">
        <div class="cookie-content">
            <p class="cookie-text-1 text text--medium text--black text--w-semibold">Мы используем cookie для улучшения работы сайта</p>
            <p class="cookie-text-2 text text--normal text--black text--w-regular">Оставаясь с нами, вы соглашаетесь на использование файлов cookie</p>
            <button class="cookie-accept-button text text--normal text--white text--w-regular">Ок</button>
        </div>
    </div>
</div>
<!-- /. Cookie -->

<?php wp_footer(); ?>
</body>

</html>