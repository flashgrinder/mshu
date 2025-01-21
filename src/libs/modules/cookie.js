function init() {
    const acceptCookieBtn = document.querySelector('.cookie-accept-button');
    const cookieModal = document.querySelector('.cookie-container');
    
    if (localStorage.getItem('isCookieAccepted') !== 'true') {
        console.log(localStorage.isCookieAccepted);
        cookieModal.classList.remove('hidden');

        acceptCookieBtn.addEventListener('click', () => {
            localStorage.setItem('isCookieAccepted', true);
            cookieModal.classList.add('hidden');
            console.log(localStorage.getItem('isCookieAccepted'));
        })
    }
    
    
    
}

export default { init }
