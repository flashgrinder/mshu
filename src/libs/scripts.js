import gsap from 'gsap';
import partnersSlider from '../libs/modules/partners';
import newsSlider from '../libs/modules/news-slider';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    // const burgerMenuTrue = document.querySelector('.burger-menu');
    const partnersSliderTrue = document.querySelector('.partners--slider');
    const newsSliderTrue = document.querySelector('.news-slider');
    // const selectTrue = document.querySelector('.js-select');

    // gsReveal.init();
    // burgerMenuTrue ? burgerMenu.init() : false;
    // modal.init();
    // selectTrue ? slimSelect.init() : false;
    partnersSliderTrue ? partnersSlider.init() : false;
    newsSliderTrue ? newsSlider.init() : false;

});