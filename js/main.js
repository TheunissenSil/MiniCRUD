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
const form = document.querySelectorAll(".formulier");
const formInput = document.querySelectorAll(".formulier .inputForm");

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

// Eventueel 2de formulier op de pagina!
const secondForm = document.querySelectorAll(".formulier2");
const secondFormInput = document.querySelectorAll(".formulier2 .inputForm");

for (let q = 0; q < form.length; q++) {
  if (secondForm[q]) {
    secondForm[q].addEventListener("submit", (e) => {
      for (let i = 0; i < secondFormInput.length; i++) {
        if (secondFormInput[i].value.length == 0) {
          e.preventDefault();
          secondFormInput[i].style.border = "2px solid red";
        } else {
          secondFormInput[i].style.border = "1px solid black";
        }
      }
    });
  }
}

// ChangeMenuForm
const gerechtenForm = document.querySelector("#gerechtenForm");
const drankjesForm = document.querySelector("#drankjesForm");

if (window.location.href.indexOf("#gerechtenForm") > -1) {
  drankjesForm.style.display = "none";
  gerechtenForm.style.display = "block";
}

if (window.location.href.indexOf("#drankjesForm") > -1) {
  gerechtenForm.style.display = "none";
  drankjesForm.style.display = "block";
}

const drankjesButton = document.querySelector("#drankjesButton");
const gerechtenButton = document.querySelector("#gerechtenButton");

if (gerechtenButton) {
  gerechtenButton.addEventListener("click", () => {
    drankjesForm.style.display = "none";
    gerechtenForm.style.display = "block";
  });
}

if (drankjesButton) {
  drankjesButton.addEventListener("click", () => {
    gerechtenForm.style.display = "none";
    drankjesForm.style.display = "block";
  });
}
