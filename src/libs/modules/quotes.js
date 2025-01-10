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
        quote.textContent = "«" + quotes[opinionNumber].quote + "»";
        name.textContent = quotes[opinionNumber].name;
        position.textContent = quotes[opinionNumber].position;
    }
}

export default { init }