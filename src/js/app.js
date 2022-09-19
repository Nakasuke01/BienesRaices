document.addEventListener('DOMContentLoaded', function () {
    eventListeners();

    darkmode();
});

function darkmode() {
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', cuerpoLLamado);
}

function cuerpoLLamado() {
    const cuerpo = document.querySelector('body');
    cuerpo.classList.toggle('dark-mode');
}

function eventListeners() {
            const mobileMenu = document.querySelector('.mobile-menu');

            mobileMenu.addEventListener('click', navegacionResponsive);
    }

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
    }