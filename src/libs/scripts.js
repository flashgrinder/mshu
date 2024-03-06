import gsap from 'gsap';
import gsReveal from '../libs/modules/gs-reveal';
import modal from '../libs/modules/modal';
import scrollHeader from '../libs/modules/scroll-header';
import burgerMenu from '../libs/modules/burger-menu';
import newsSlider from '../libs/modules/news-slider';
import partnersSlider from '../libs/modules/partners';
import slimSelect from '../libs/modules/slim-select.js';
import mentors from '../libs/modules/mentors';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    const partnersSliderTrue = document.querySelector('.partners--slider');
    const newsSliderTrue = document.querySelector('.news-slider');

    modal.init();
    burgerMenu.init();
    scrollHeader.init();
    gsReveal.init();
    slimSelect.init();
    mentors.init();
    partnersSliderTrue ? partnersSlider.init() : false;
    newsSliderTrue ? newsSlider.init() : false;

});