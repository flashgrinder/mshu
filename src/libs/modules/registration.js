function init() {

    const registrationSlider = new Swiper('.js-registration-slider', {
        grabCursor: true,
        loop: true,
        speed: 800,
        spaceBetween: 30,
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