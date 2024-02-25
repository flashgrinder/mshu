import SlimSelect from 'slim-select'

function init() {
    
    const modalSelect = new SlimSelect({
        select: document.querySelector('.js-select-modal'),
        settings: {
            showSearch: false,
            searchFocus: false,
        }
    });

    // const filterSelect = new SlimSelect({
    //   select: document.querySelector('.js-select-filter'),
    //   showSearch: false,
    //   searchFocus: false,
    // });

}

export default { init }