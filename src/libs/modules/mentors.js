import HystModal from 'hystmodal';

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

    const searchInput = document.querySelector(".modal__search .modal__input");
    const resultMessage = document.querySelector(".modal__message");
    const list = document.querySelector(".modal__list");
    const selected = document.querySelector(".mentors__selected-city");

    const templateFragment = document.querySelector("#element-template").content;
    const template = templateFragment.querySelector("li");
    const fragment = document.createDocumentFragment();

    const lowerCaseCities = cities.map(city => city.toLowerCase());

    const switchSlider = (city) => {
        let searchValue;

        // Проверка: city - это элемент input или строка
        if (city instanceof HTMLInputElement) {
            searchValue = city.value.trim();
        } else if (typeof city === 'string') {
            searchValue = city.trim();
        } else {
            searchValue = city.textContent.trim();
        }

        if (searchValue === "") {
            resultMessage.textContent = "Введите название города";
            return;
        }

        const lowerCaseSearchValue = searchValue.toLowerCase();
        const cityIndex = lowerCaseCities.indexOf(lowerCaseSearchValue);

        if (cityIndex !== -1) {
            const originalCity = cities[cityIndex];
            if (selected.textContent !== originalCity) {
                selected.textContent = originalCity;

                const selectedIndex = cityIndex + 1; // Для ACF индексация с 1
                selected.setAttribute('data-tab-trigger', `${selectedIndex}`);

                const currentTabData = document.querySelector(`.tabs__content[data-tab-content="${selectedIndex}"]`);
                document.querySelector('.tabs__content.is-open').classList.remove('is-open');

                currentTabData.classList.add('is-open');
                citySelectModal.close();
            }
        } else {
            resultMessage.textContent = `Город "${searchValue}" не найден`;
        }
    };


    if (typeof cities !== "undefined" && cities.length > 0) {
        /*  Вывод названия города при первичном рендеринге страницы */
        selected.textContent = cities[0];

        cities.forEach((city, index) => {
            const element = template.cloneNode(true);
            const link = element.querySelector(".modal__city-button");
            link.textContent = city;

            if (index === 0) {
                link.classList.add("modal__city-button--active", "text--w-bold");
            }

            link.addEventListener('click', () => {
                switchSlider(link.textContent);
                /* Выделение активного города в списке */
                document.querySelector('.modal__city-button.modal__city-button--active').classList.remove("modal__city-button--active", "text--w-bold");
                link.classList.add("modal__city-button--active", "text--w-bold");
            })
            fragment.appendChild(element);
        })
        list.appendChild(fragment);
    }

    const citySelectModal = new HystModal({
        linkAttributeName: "data-city-modal",
        catchFocus: false,
        waitTransitions: true,
        backscroll: false,
        afterClose: function (citySelectModal) {
            /* Очистка поля input внутри модального окна */
            if (searchInput) {
                searchInput.value = '';
            }
        }
    });

    searchInput.addEventListener('keydown', function (event) {
        if (event.key !== 'Enter') return;

        event.preventDefault();

        const enteredValue = searchInput.value.trim();

        if (enteredValue === "") {
            resultMessage.textContent = "Введите название города";
            return;
        }

        switchSlider(enteredValue);
    })
}

export default { init }