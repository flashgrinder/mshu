import Swiper, { Autoplay } from 'swiper';

function init() {

    Swiper.use([ Autoplay ]);

    const partnersSlider = new Swiper(".js-partners-slider", {
        loop: true,
        autoHeight: true,
        slidesPerView: 6,
        spaceBetween: 20,
        effect: 'slide',
        speed: 10000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false
        },
        breakpoints: {
            320: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 5,
            },
            1280: {
              slidesPerView: 6,
            }
        }
    });

}

export default { init }