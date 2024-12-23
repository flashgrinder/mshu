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

    const slider = document.querySelector('.video-slider');
    const debouncedResetVideoSlider = _.debounce(resetVideoSlider, 200);

    slider.addEventListener('resize', debouncedResetVideoSlider);

    // window.addEventListener('resize', resetVideoSlider);

    // let lastScrollPosition = 0;

    // // Сохраняем позицию прокрутки при клике на видео
    // document.querySelectorAll('.video-slider__item').forEach(iframe => {
    //     console.log(iframe.querySelector('.raichu-button-module__control___Cys9B'));

    //     iframe.querySelector('.raichu-button-module__control___Cys9B').addEventListener('click', function () {
    //         lastScrollPosition = window.scrollY;
    //         console.log(lastScrollPosition);
    //     });
    // });

    // // window.addEventListener('message', function (event) {
    // //     // Предполагаем, что сообщение всегда в формате JSON
    // //     var message = JSON.parse(event.data);

    // //     // // Логируем тип события (по необходимости)
    // //     // console.log(message.type);

    // //     // Обрабатываем только события изменения состояния плеера
    // //     if (message.type === 'player:changeState') {
    // //         // // Логируем состояние плеера
    // //         // console.log(message.data.state);

    // //         // Если состояние — "playing", значит видео начало воспроизведение
    // //         if (message.data.state === 'playing') {
    // //             // console.log('Видео начало воспроизведение. Ликуем');
    // //             // Тут можно добавить ваш код для обработки начала воспроизведения
    // //             lastScrollPosition = window.scrollY;
    // //             // console.log(lastScrollPosition);
    // //         }
    // //     }
    // // });

    // // window.addEventListener('message', function (event) {
    // //     // Проверяем, что данные являются строкой и начинаются с '{' (объект JSON) или '[' (массив JSON)
    // //     if (typeof event.data === 'string' && (event.data.startsWith('{') || event.data.startsWith('['))) {
    // //         try {
    // //             var message = JSON.parse(event.data);
    
    // //             // Обрабатываем только события изменения состояния плеера
    // //             if (message.type === 'player:changeState') {
    // //                 // Если состояние — "playing", значит видео начало воспроизведение
    // //                 if (message.data.state === 'playing') {
    // //                     lastScrollPosition = window.scrollY;
    // //                     // Тут можно добавить ваш код для обработки начала воспроизведения
    // //                 }
    // //             }
    // //         } catch (e) {
    // //             console.error('Ошибка парсинга JSON: ', e);
    // //         }
    // //     } else {
    // //         console.warn('Полученные данные не являются JSON:', event.data);
    // //     }
    // // });
    

    // // Слушаем событие изменения полноэкранного режима
    // document.addEventListener('fullscreenchange', function () {
    //     if (document.fullscreenElement) {
    //         // Переход в полноэкранный режим
    //         console.log('Перешли в полноэкранный режим');
    //     } else {
    //         // Выход из полноэкранного режима
    //         console.log('Выход из полноэкранного режима');
    //         window.scrollTo({
    //             top: lastScrollPosition,
    //             behavior: 'instant'
    //         });  // Восстанавливаем позицию прокрутки
    //     }
    // });



}

export default { init }