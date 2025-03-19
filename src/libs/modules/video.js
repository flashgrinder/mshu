function init() {

    let videoSlider;

    function initializeVideoSlider() {
        const slides = document.querySelectorAll('.video-slider__item');
        const prevButton = document.querySelector('.video-slider .js-slider-prev');
        const nextButton = document.querySelector('.video-slider .js-slider-next');
        let loopEnabled = slides.length > 1; // Активируем loop только если слайдов больше 1

        videoSlider = new Swiper('.js-video-slider', {
            loop: loopEnabled,
            centeredSlides: true,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.js-slider-next',
                prevEl: '.js-slider-prev',
            }
        });

        if (slides.length > 1) {
            nextButton.addEventListener('click', function () {
                // Задержка 200 мс для того чтобы слайд успел переключиться перед тем как искать элемент
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
    
            prevButton.addEventListener('click', function () {
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
        } else {
            nextButton.style.display = 'none';
            prevButton.style.display = 'none';
        };
    }

    initializeVideoSlider();

    function resetVideoSlider() {
        if (videoSlider) {
            videoSlider.destroy(true, true);
        }

        initializeVideoSlider();
    }

    const slider = document.querySelector('.video-slider');
    const debouncedResetVideoSlider = _.debounce(resetVideoSlider, 200);

    slider.addEventListener('resize', debouncedResetVideoSlider);

    // window.addEventListener('resize', resetVideoSlider);
}

export default { init }