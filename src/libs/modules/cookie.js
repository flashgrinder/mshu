function init() {

    if (localStorage.getItem('isCookieAccepted') !== 'true') {

        const acceptCookieBtn = document.querySelector('.cookie-accept-button');
        const cookieModal = document.querySelector('.cookie-container');
        
        cookieModal.classList.remove('hidden');

        acceptCookieBtn.addEventListener('click', () => {
            localStorage.setItem('isCookieAccepted', true);
            cookieModal.classList.add('hidden');
        })
    }
}

export default { init }
