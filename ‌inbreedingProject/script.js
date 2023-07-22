let menu = document.querySelector('#menu-icon');
let nav = document.querySelector('.navlist');


menu.onclick = () => {

    menu.classList.toggle('bx-x');
    nav.classList.toggle('open');
}

