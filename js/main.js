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
const loginForm = document.querySelector("#loginForm");
const usernameLogin = document.querySelector("#usernameLogin");
const passwordLogin = document.querySelector("#passwordLogin");

if (loginForm) {
  loginForm.addEventListener("submit", (e) => {
    loginCheck = false;

    if (usernameLogin.value.length == 0) {
      usernameLogin.style.border = "2px solid red";
      loginCheck = true;
    } else {
      usernameLogin.style.border = "1px solid";
    }

    if (passwordLogin.value.length == 0) {
      passwordLogin.style.border = "2px solid red";
      loginCheck = true;
    } else {
      passwordLogin.style.border = "1px solid";
    }

    if (loginCheck === true) {
      e.preventDefault();
    }
  });
}

// Check register form
const registerForm = document.querySelector("#registerForm");
const usernameRegister = document.querySelector("#usernameRegister");
const emailRegister = document.querySelector("#emailRegister");
const passwordRegister = document.querySelector("#passwordRegister");
const confirmpasswordRegister = document.querySelector(
  "#confirmpasswordRegister"
);

if (registerForm) {
  registerForm.addEventListener("submit", (e) => {
    registerCheck = false;

    if (usernameRegister.value.length == 0) {
      usernameRegister.style.border = "2px solid red";
      registerCheck = true;
    } else {
      usernameRegister.style.border = "1px solid";
    }

    if (emailRegister.value.length == 0) {
      emailRegister.style.border = "2px solid red";
      registerCheck = true;
    } else {
      emailRegister.style.border = "1px solid";
    }

    if (passwordRegister.value.length == 0) {
      passwordRegister.style.border = "2px solid red";
      registerCheck = true;
    } else {
      passwordRegister.style.border = "1px solid";
    }

    if (confirmpasswordRegister.value.length == 0) {
      confirmpasswordRegister.style.border = "2px solid red";
      registerCheck = true;
    } else {
      confirmpasswordRegister.style.border = "1px solid";
    }

    if (registerCheck === true) {
      e.preventDefault();
    }
  });
}

// Are you sure?
const deleteButton = document.querySelector("#delete");
const areYouSure = document.querySelector("#areYouSure");
const notSure = document.querySelector("#notSure");

if (deleteButton) {
  console.log("jemoeder");
  deleteButton.addEventListener("click", () => {
    deleteButton.style.display = "none";
    areYouSure.style.display = "flex";
  });
}

if (notSure) {
  notSure.addEventListener("click", () => {
    deleteButton.style.display = "unset";
    areYouSure.style.display = "none";
  });
}
