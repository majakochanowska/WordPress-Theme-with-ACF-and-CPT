window.onscroll = function() {changeHeader()};

var header = document.getElementById("header-top");
var navlink = document.querySelectorAll(".main-navigation a");
var navlink_last = document.querySelector(".main-navigation li:last-child");
var main_logo = document.querySelector(".site-branding");
var alternative_logo = document.querySelector(".site-branding-alternative");

var sticky = header.offsetTop;

function changeHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky-header");
    for (var i=0; i<navlink.length-1; i++) {
      navlink[i].style.color = "#2E3035";
    }
    navlink_last.style.background = "linear-gradient(60.85deg, #DA1059 0%, #6E2F8C 100%)";
    main_logo.style.display = "none";
    alternative_logo.style.display = "block";
  } else {
    header.classList.remove("sticky-header");
    for (var i=0; i<navlink.length-1; i++) {
      navlink[i].style.color = "#fff";
    }
    navlink_last.style.background = "rgba(255, 255, 255, 0.25)";
    main_logo.style.display = "block";
    alternative_logo.style.display = "none";
  }
}