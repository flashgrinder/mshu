function init() {

    let element = document.querySelector('.js-header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 100) {
            element.classList.add("is-scroll");
        } else {
            element.classList.remove("is-scroll");
        }
    });

}

export default { init }