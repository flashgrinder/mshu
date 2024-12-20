function init() {

    let videoSlider;

    function initializeVideoSlider() {
        videoSlider = new Swiper('.js-video-slider', {
            loop: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.js-slider-next',
                prevEl: '.js-slider-prev',
            }
        });

        document.querySelector('.video-slider .js-slider-next').addEventListener('click', function () {
            setTimeout(() => {
                const player = document.querySelector('.swiper-slide-prev .video-slider__player');

                player.contentWindow.postMessage(JSON.stringify(
                    {
                        type: 'player:pause',
                        data: {}
                    }
                ), '*');
            }, 200)
        });

        document.querySelector('.video-slider .js-slider-prev').addEventListener('click', function () {
            setTimeout(() => {
                const player = document.querySelector('.swiper-slide-next .video-slider__player');

                player.contentWindow.postMessage(JSON.stringify(
                    {
                        type: 'player:pause',
                        data: {}
                    }
                ), '*');
            }, 200)
        });
    }

    initializeVideoSlider();

    function resetVideoSlider() {
        if (videoSlider) {
            videoSlider.destroy(true, true);
        }

        initializeVideoSlider();
    }

    const debouncedResetVideoSlider = _.debounce(resetVideoSlider, 200);

    window.addEventListener('resize', debouncedResetVideoSlider);

    // window.addEventListener('resize', resetVideoSlider);
}

export default { init }