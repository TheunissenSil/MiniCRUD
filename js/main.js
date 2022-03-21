/*backToTop = document.getElementById("backToTop");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backToTop.style.display = "block";
  } else {
    backToTop.style.display = "none";
  }
}

function backToTopFunction() {
  document.body.scrollTop = 0; // Safari
  document.documentElement.scrollTop = 0; // Chrome, firefox, Internet Explorer, Opera
}*/

function login() {
  document.querySelector(".login").style.display = "block";
  document.querySelector(".register").style.display = "none";
}

function register() {
  document.querySelector(".login").style.display = "none";
  document.querySelector(".register").style.display = "block";
}
