import SlimSelect from 'slim-select'

function init() {

    const participantSelect = new SlimSelect({
        select: document.querySelector('.js-select-participant'),
        settings: {
            showSearch: false,
            searchFocus: false,
        }

    });

    const mentorSelect = new SlimSelect({
        select: document.querySelector('.js-select-mentor'),
        settings: {
            showSearch: false,
            searchFocus: false,
        }

    });

}

export default { init }