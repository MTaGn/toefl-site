"use strict";

document.addEventListener('DOMContentLoaded', function(){

   /*  ハンバーガーメニュー開閉  */    
   const humbergerElem = document.querySelector(".header-container__humberger");
   const closeElem = document.querySelector(".header-container__close");
   const maskElem = document.querySelector(".header-container__mask");
   const spMenuElem = document.querySelector(".header-container__nav-menu-list-sp");

   humbergerElem.addEventListener("click", () => {
        spMenuElem.classList.add("show");
   });
   closeElem.addEventListener("click", () => {
        spMenuElem.classList.remove("show");
   });


   /*  よくある質問アコーディオン開閉  */    
   const toggleBtnElem = document.querySelector(".how-to-use-container__toggle");
   const questionElems = document.querySelectorAll(".how-to-use-container__main-text");
   
    questionElems.forEach( (questionElem) => {
        questionElem.addEventListener("click", () => {
            questionElem.childNodes[1].classList.toggle("how-to-use-container__hidden");
            questionElem.nextElementSibling.classList.toggle("how-to-use-container__hidden");
        });
    });

});