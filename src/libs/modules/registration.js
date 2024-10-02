function init() {

    const registrationSlider = new Swiper('.js-registration-slider', {
        direction: 'horizontal',
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        slidesPerView: 1,
        mousewheel: {
            invert: false,
        },
        pagination: {
            el: '.js-registration-slider-pagination',
            type: 'bullets',
        },
        navigation: {
            nextEl: '.js-slider-next',
            prevEl: '.js-slider-prev',
        },

    });

    const slides = document.querySelectorAll('.reg-slider__item');
    const controls = document.querySelector('.reg-slider__arrows');

    if (slides.length < 2) {
        registrationSlider.destroy();
        controls.style.display = 'none';
    }
}

export default { init }