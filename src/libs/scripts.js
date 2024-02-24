import gsap from 'gsap';
import gsReveal from '../libs/modules/gs-reveal';
import scrollHeader from '../libs/modules/scroll-header';
import burgerMenu from '../libs/modules/burger-menu';
import partnersSlider from '../libs/modules/partners';
import newsSlider from '../libs/modules/news-slider';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    const partnersSliderTrue = document.querySelector('.partners--slider');
    const newsSliderTrue = document.querySelector('.news-slider');
    // const selectTrue = document.querySelector('.js-select');

    // modal.init();
    // selectTrue ? slimSelect.init() : false;
    burgerMenu.init();
    scrollHeader.init();
    gsReveal.init();
    partnersSliderTrue ? partnersSlider.init() : false;
    newsSliderTrue ? newsSlider.init() : false;

});