(function (){
    const  burger = document.querySelector('.header_burger');
    const  menu = document.querySelector('.btn_menu');
    const  bbr = document.querySelector('.bb');
    burger.addEventListener('click', () =>{
        burger.classList.toggle('burger_active');
    });
    burger.addEventListener('click', () =>{
        menu.classList.toggle('menu_active');
    });
    burger.addEventListener('click', () =>{
        bbr.classList.toggle('body_menu');
    });
}());
