// Variables

let nav = document.getElementById('nav');
let logo = document.getElementById('logo-nav');

//transicion de barra de menu nav1 --> nav2
function menus(){
    let Desplazamiento_Actual = window.pageYOffset;

    if(Desplazamiento_Actual <= 200){
        nav.classList.remove('nav-blank');
        logo.classList.remove('nav-logo-dark');
        nav.className = ('header-nav');
        logo.className = ('nav-logo');
        nav.style.transition = '.7s';
    }else{
        nav.classList.remove('header-nav');
        logo.classList.remove('nav-logo');
        nav.className = ('nav-blank');
        logo.className = ('nav-logo-dark');
        nav.style.transition = '.7s';
    }
}

window.addEventListener('scroll', function(){
    console.log(window.pageYOffset);
    menus();
});