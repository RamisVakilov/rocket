!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){window.addEventListener("DOMContentLoaded",(function(){"use strict";var e=n(1),t=n(2),o=n(3),r=n(4);e(),t(),o(),r()}))},function(e,t){e.exports=function(){var e,t=tns({container:".slider .wrap",items:1,slideBy:1,controls:!1,navPosition:"bottom",center:!0,swipeAngle:!0,navAsThumbnails:!0,speed:500,autoplayButton:!1,gutter:1,controlsPosition:"bottom"}),n=document.getElementById("left"),o=document.getElementById("rigth"),r=document.getElementById("active"),l=document.getElementById("all"),i=t.getInfo(),c=i.slideItems,u=i.slideCount,s=function(){for(var t=1;t<u+1;t++)for(var n=c[t].classList,o=0;o<n.length;o++)if("tns-slide-active"==n[o]){e=t,r.textContent=e,l.textContent=u;break}};s(),o.addEventListener("click",(function(){e!=u?(t.goTo("prev"),s()):1==e?(t.goTo("last"),s()):(t.goTo("prev"),s())})),n.addEventListener("click",(function(){1!=e?(t.goTo("next"),s()):e==u?(t.goTo("first"),s()):(t.goTo("next"),s())})),t.events.on("indexChanged",(function(){s()}))}},function(e,t){e.exports=function(){var e=document.querySelector(".burger"),t=document.querySelector(".nav_mobile"),n=document.querySelector("body");e.addEventListener("click",(function(){e.classList.toggle("burger-active"),t.classList.toggle("nav_mobile-active"),n.classList.toggle("over")}))}},function(e,t){e.exports=function(){var e=document.querySelector(".modal__form"),t=document.querySelector(".modal__message"),n=document.querySelectorAll(".button__signup"),o=document.querySelector(".overlay"),r=document.querySelector(".modal__close_form"),l=document.querySelector(".modal__close_message");n.forEach((function(t){t.addEventListener("click",(function(){var n=t.className;"button__signup"==n?(o.style.display="block",e.style.display="block",document.body.style.overflow="hidden"):"button__signup button__signup_mobile"==n&&(document.querySelector(".burger").classList.toggle("burger-active"),document.querySelector(".nav_mobile").classList.toggle("nav_mobile-active"),document.querySelector("body").classList.toggle("over"),o.style.display="block",e.style.display="block",document.body.style.overflow="hidden",document.querySelector(".nav_mobile").style.transition="all 0s linear",setTimeout((function(){document.querySelector(".nav_mobile").style.transition="all 0.3s linear"}),.3))}))})),r.addEventListener("click",(function(){o.style.display="none",e.style.display="none",document.body.style.overflow="visible"})),l.addEventListener("click",(function(){o.style.display="none",t.style.display="none",document.body.style.overflow="visible"}))}},function(e,t){e.exports=function(){[].forEach.call(document.querySelectorAll(".form__tel"),(function(e){var t;function n(e){e.keyCode&&(t=e.keyCode),this.selectionStart<3&&e.preventDefault();var n="+7 (___) ___ ____",o=0,r=n.replace(/\D/g,""),l=this.value.replace(/\D/g,""),i=n.replace(/[_\d]/g,(function(e){return o<l.length?l.charAt(o++)||r.charAt(o):e}));-1!=(o=i.indexOf("_"))&&(o<5&&(o=3),i=i.slice(0,o));var c=n.substr(0,this.value.length).replace(/_+/g,(function(e){return"\\d{1,"+e.length+"}"})).replace(/[+()]/g,"\\$&");(!(c=new RegExp("^"+c+"$")).test(this.value)||this.value.length<5||t>47&&t<58)&&(this.value=i),"blur"==e.type&&this.value.length<5&&(this.value="")}e.addEventListener("input",n,!1),e.addEventListener("focus",n,!1),e.addEventListener("blur",n,!1),e.addEventListener("keydown",n,!1)}))}}]);
//# sourceMappingURL=index.js.map