function init() {

    const listSlider = Array.from(document.querySelectorAll(".js-slider-mentors-init"));

    listSlider.forEach((item) => {
        let sliderText = item.querySelector('.js-mentors-slider-text');
        let sliderPhoto = item.querySelector('.js-mentors-slider-photo');

        const nextEl = item.querySelector('.js-slider-next');
        const prevEl = item.querySelector('.js-slider-prev');
        const sliderPagination = item.querySelector('.js-mentors-slider-pagination');

        const mentorsSliderText = new Swiper(sliderText, {
            // loop: true,
            allowTouchMove: false,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

        const mentorsSliderPhoto = new Swiper(sliderPhoto, {
            // loop: true,
            centeredSlides: true,
            slidesPerView: 1,
            // loopAdditionalSlides: 1,
            // slideToClickedSlide: true,
            // lazyPreloadPrevNext: 2,

            breakpoints: {
                769: {
                    slidesPerView: 'auto',
                    // slidesOffsetBefore: -375,
                }
            },
            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },
            // mousewheel: {
            //     invert: false,
            // },
            // pagination: {
            //     el: sliderPagination,
            //     type: 'bullets',
            // },
            navigation: {
                nextEl: nextEl,
                prevEl: prevEl,
            },
            thumbs: {
                swiper: mentorsSliderText,
            },
        });

        // function isMobileDevice() {
        //     return navigator.userAgentData && navigator.userAgentData.mobile;
        // }

        // const viewportWidth = window.innerWidth;
        // if (!isMobileDevice() && (viewportWidth < 769)) {
        //     console.log('я надеюсь что я чемпион');
        //     window.addEventListener('resize', () => {
        //         if (window.innerWidth >= 769) {
        //             console.log('мне нужно спросить у мамы кто ее чемпион');
        //             mentorsSliderPhoto.update;
        //         }
        //     })
        // }
    });

    let tabTriggerBtns = document.querySelectorAll('.tabs__button');

    if (tabTriggerBtns.length !== 0) {
        tabTriggerBtns.forEach(function (tabTriggerBtn, index) {

            tabTriggerBtn.addEventListener('click', function () {

                let currentTabData = document.querySelector('.tabs__content[data-tab-content="' + this.dataset.tabTrigger + '"]');

                document.querySelector('.tabs__content.is-open').classList.remove('is-open');
                document.querySelector('.tabs__button.is-active').classList.remove('is-active');
                currentTabData.classList.add('is-open');
                this.classList.add('is-active');

            });
        });

        const select = document.getElementById("basic-select");
        const menu = document.getElementById("option-select");
        const dropdowns = document.querySelectorAll(".dropdown");
        const cart = document.querySelector(".carpet");
        const options = document.querySelectorAll(".options .options__item");
        const selected = document.getElementById("select-title");
        let active = document.querySelector(".options__item--active");
        const animTime = 100;

        select.addEventListener('mouseenter', function () {
            select.classList.add("selected--open");
            cart.classList.add("carpet--open");
            setTimeout(function () {
                select.classList.add("selected--delay");
            }, animTime);
        });
        select.addEventListener('mouseleave', function () {
            select.classList.remove("selected--open");
            cart.classList.remove("carpet--open");
            setTimeout(function () {
                select.classList.remove("selected--delay");
            }, animTime);
        });
        menu.addEventListener('mouseenter', function () {
            select.classList.add("selected--open");
            cart.classList.add("carpet--open");
            setTimeout(function () {
                select.classList.add("selected--delay");
            }, animTime);
        });
        menu.addEventListener('mouseleave', function () {
            select.classList.remove("selected--open");
            cart.classList.remove("carpet--open");
            setTimeout(function () {
                select.classList.remove("selected--delay");
            }, animTime);
        });
        options.forEach(option => {
            option.addEventListener("click", function () {
                selected.innerText = option.innerText;
                active.classList.remove("options__item--active");
                option.classList.add("options__item--active");
                active = document.querySelector(".options__item--active");
            });
        });
    }
}

export default { init }