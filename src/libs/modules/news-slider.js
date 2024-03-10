function init() {

    const newsSlider = new Swiper(".js-news-slider", {
        slidesPerView: 2,
        // autoHeight: true,
        centeredSlides: true,
        loop: true,
        effect: 'coverflow',
        speed: 800,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            waitForTransition: false,
            pauseOnMouseEnter: true,
        },
        coverflowEffect: {
            slideShadows: false,
            rotate: 0,
            stretch: 231,
            depth: 150,
            modifier: 1.7,
        },
        pagination: {
            el: '.js-news-slider-pagination',
            type: 'bullets',
        },
        navigation: {
            nextEl: '.js-slider-next',
            prevEl: '.js-slider-prev',
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