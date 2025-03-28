import gsap from 'gsap';
import gsReveal from '../libs/modules/gs-reveal';
import modal from '../libs/modules/modal';
import scrollHeader from '../libs/modules/scroll-header';
import burgerMenu from '../libs/modules/burger-menu';
import quotes from '../libs/modules/quotes';
import videoSlider from '../libs/modules/video';
import partnersSlider from '../libs/modules/partners';
import slimSelect from '../libs/modules/slim-select.js';
import mentors from '../libs/modules/mentors';
import registrationSlider from '../libs/modules/registration.js';
import cookie from '../libs/modules/cookie.js';
import map from '../libs/modules/map.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    const modalTrue = document.querySelector('[data-modal]');
    const partnersSliderTrue = document.querySelector('.partners--slider');
    const mentorsSliderTrue = document.querySelector('.js-mentors-init');
    const videoSliderTrue = document.querySelector('.js-video-slider');
    const registrationSliderTrue = document.querySelector('.js-registration-slider');
    const mapBlock = document.querySelector('.map');

    burgerMenu.init();
    scrollHeader.init();
    quotes.init();
    gsReveal.init();
    modalTrue ? modal.init() : false;
    modalTrue ? slimSelect.init() : false;
    partnersSliderTrue ? partnersSlider.init() : false;
    mentorsSliderTrue ? mentors.init() : false;
    videoSliderTrue ? videoSlider.init() : false;
    registrationSliderTrue ? registrationSlider.init() : false;
    cookie.init();
    mapBlock ? map.init() : false;
});