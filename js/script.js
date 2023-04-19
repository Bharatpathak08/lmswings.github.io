// let navbar = document.querySelector('.navbar');
const navbar = document.querySelector("[data-navbar]");

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

/**
 * navbar toggle
 */

// const navbar = document.querySelector("[data-navbar]");
// const navbarLinks = document.querySelectorAll("[data-nav-link]");
// const navToggler = document.querySelector("[data-nav-toggler]");

// const toggleNavbar = function () {
//   navbar.classList.toggle("active");
//   navToggler.classList.toggle("active");
//   document.body.classList.toggle("active");
// }

// addEventOnElem(navToggler, "click", toggleNavbar);

// const closeNavbar = function () {
//   navbar.classList.remove("active");
//   navToggler.classList.remove("active");
//   document.body.classList.remove("active");
// }

addEventOnElem(navbarLinks, "click", closeNavbar);