function init() {

    if (typeof quotes !== "undefined" && quotes.length > 0) {

        const photo = document.querySelector(".dictation__photo");
        const quote = document.querySelector(".dictation__quote-text");
        const name = document.querySelector(".dictation__mentor-name");
        const position = document.querySelector(".dictation__mentor-position");

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        const maxQuantityOpinion = quotes.length - 1;

        const opinionNumber = getRandomInt(0, maxQuantityOpinion);

        photo.src = quotes[opinionNumber].photo_url;
        photo.alt = quotes[opinionNumber].photo_alt;
        quote.textContent = "«" + quotes[opinionNumber].quote + "».";
        name.textContent = quotes[opinionNumber].name;
        position.textContent = quotes[opinionNumber].position;


        // Добавление классов для анимации

        // Функция для проверки, виден ли элемент на экране
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight);
        }

        // Функция для добавления класса, когда элемент полностью видим
        function checkVisibilityAndAddClass() {
            const element = document.querySelector('.dictation__opinion'); // Ваш элемент
            if (element && isElementInViewport(element)) {
                const photo = element.querySelector(".dictation__photo");
                const quote = element.querySelector(".dictation__quote");
                const mentor = element.querySelector(".dictation__mentor");

                if (photo) photo.classList.add("dictation__photo--visible");
                if (quote) quote.classList.add("dictation__quote--visible");
                if (mentor) mentor.classList.add("dictation__mentor--visible");
                window.removeEventListener('scroll', checkVisibilityAndAddClass);
            }
        }

        // Проверяем видимость при прокрутке страницы
        window.addEventListener('scroll', checkVisibilityAndAddClass);
    }
}

export default { init }