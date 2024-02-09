import gsap from 'gsap';
import partnersSlider from '../libs/modules/partners';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    // const burgerMenuTrue = document.querySelector('.burger-menu');
    const partnersSliderTrue = document.querySelector('.partners__slider');
    // const selectTrue = document.querySelector('.js-select');

    // gsReveal.init();
    // burgerMenuTrue ? burgerMenu.init() : false;
    // modal.init();
    // selectTrue ? slimSelect.init() : false;
    partnersSliderTrue ? partnersSlider.init() : false;

});