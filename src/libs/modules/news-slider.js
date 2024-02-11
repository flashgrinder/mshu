import Swiper, { Autoplay, EffectCoverflow } from 'swiper';

function init() {

    Swiper.use([ Autoplay, EffectCoverflow ]);

    const newsSlider = new Swiper(".js-news-slider", {
        slidesPerView: 2,
        // autoHeight: true,
        centeredSlides: true,
        loop: true,
        effect: 'coverflow',
        speed: 1500,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
            waitForTransition: false
        },
        coverflowEffect: {
            slideShadows: false,
            rotate: 0,
            stretch: 231,
            depth: 150,
            modifier: 1.7,
        },
        // breakpoints: {
        //     320: {
        //         slidesPerView: 2,
        //     },
        //     768: {
        //         slidesPerView: 5,
        //     },
        //     1280: {
        //         slidesPerView: 6,
        //     }
        // }
    });

}

export default { init }