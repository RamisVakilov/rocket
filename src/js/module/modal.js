let myModal = ()=>{
    let modalForm = document.querySelector('.modal__form');
    let modalMessage = document.querySelector('.modal__message');
    let button = document.querySelectorAll('.button__signup');
    let overlay = document.querySelector('.overlay');
    let closeForm = document.querySelector('.modal__close_form');
    let closeMessage = document.querySelector('.modal__close_message');
    
    button.forEach((item)=>{
        item.addEventListener('click',()=>{
            let className = item.className;
            if (className == 'button__signup')//только если кнопка записаться 
            {
               overlay.style.display = 'block';
               modalForm.style.display = 'block';
               document.body.style.overflow = "hidden";
               
            }
            //Если на мобильное меню нажал, где кнопка записаться
            else if(className == 'button__signup button__signup_mobile'){
                document.querySelector('.burger').classList.toggle('burger-active');
                document.querySelector('.nav_mobile').classList.toggle('nav_mobile-active');
                document.querySelector('body').classList.toggle('over');
                overlay.style.display = 'block';
                modalForm.style.display = 'block';
                document.body.style.overflow = "hidden";
                //Убераю плавный переход меню, а потом возвращаю это свойство
                document.querySelector('.nav_mobile').style.transition = 'all 0s linear';
                setTimeout(()=>{document.querySelector('.nav_mobile').style.transition = 'all 0.3s linear';} ,0.3);
                
            }
        });
    });
//для формы закрытие
    closeForm.addEventListener('click',()=>{
        overlay.style.display = 'none';
        modalForm.style.display = 'none';
        document.body.style.overflow = "visible";
        
    });
    //для закрытия сообщения
    closeMessage.addEventListener('click',()=>{
        overlay.style.display = 'none';
        modalMessage.style.display = 'none';
        document.body.style.overflow = "visible";
       
    });
}
module.exports = myModal;