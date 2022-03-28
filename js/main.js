// Back to Top button
backToTopButton = document.querySelector("#backToTop");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 300 ||
    document.documentElement.scrollTop > 300
  ) {
    backToTopButton.style.display = "block";
  } else {
    backToTopButton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Datum van vandaag
let today = new Date();

let month, day;

if (today.getMonth() < 10) {
  month = "0" + (today.getMonth() + 1);
} else {
  month = today.getMonth() + 1;
}

if (today.getDate() < 10) {
  day = "0" + today.getDate();
} else {
  day = today.getDate();
}

let date = today.getFullYear() + "-" + month + "-" + today.getDate();

const datumForm = document.querySelector("#datumForm");

if (datumForm) {
  datumForm.setAttribute("min", date);
}

// Check login form
const form = document.getElementsByClassName("formulier");
const formInput = document.getElementsByClassName("inputForm");

for (let q = 0; q < form.length; q++) {
  if (form[q]) {
    form[q].addEventListener("submit", (e) => {
      for (let i = 0; i < formInput.length; i++) {
        if (formInput[i].value.length == 0) {
          e.preventDefault();
          formInput[i].style.border = "2px solid red";
        } else {
          formInput[i].style.border = "1px solid black";
        }
      }
    });
  }
}
