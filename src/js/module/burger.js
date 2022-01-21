let myBurger = ()=>{
    let burger = document.querySelector('.burger');
    let menu = document.querySelector('.nav_mobile');
    let body = document.querySelector('body');
    
    burger.addEventListener('click',() => {
        burger.classList.toggle('burger-active');
        menu.classList.toggle('nav_mobile-active');
        body.classList.toggle('over');
       
    });
}
module.exports = myBurger;  