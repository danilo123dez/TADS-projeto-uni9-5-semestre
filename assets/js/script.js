const menuHamburguer = document.querySelector('.hamburguer'),
menu = document.querySelector('.navbar-mobile'), openBtn = document.querySelector('.open'),
closeBtn = document.querySelector('.close');

menuHamburguer.addEventListener('click', () => {
    menu.classList.toggle('active');
    openBtn.classList.toggle('active');
    closeBtn.classList.toggle('active');
});