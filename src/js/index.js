
window.addEventListener('DOMContentLoaded', ()=>{
    "use strict";
    let tiny = require ('./module/tiny');
    let myBurger = require ('./module/burger');
    let myModal = require('./module/modal');
    let masck = require ('./module/masck');

    tiny();
    myBurger();
    myModal();
    masck();

   })