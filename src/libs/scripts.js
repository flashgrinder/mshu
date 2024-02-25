import gsap from 'gsap';
import gsReveal from '../libs/modules/gs-reveal';
import modal from '../libs/modules/modal';
import scrollHeader from '../libs/modules/scroll-header';
import burgerMenu from '../libs/modules/burger-menu';
import partnersSlider from '../libs/modules/partners';
import newsSlider from '../libs/modules/news-slider';
import slimSelect from '../libs/modules/slim-select.js';

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
    partnersSliderTrue ? partnersSlider.init() : false;
    newsSliderTrue ? newsSlider.init() : false;

});