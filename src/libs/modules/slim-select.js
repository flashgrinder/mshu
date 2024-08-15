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
      showSearch: false,
      searchFocus: false,
    });

    const partnerSelect = new SlimSelect({
      select: document.querySelector('.js-select-partner'),
      showSearch: false,
      searchFocus: false,
    });

}

export default { init }