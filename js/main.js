// Back to Top button
//window.onscroll = function () {
//  if (pageYOffset >= 200) {
//    document.getElementById("arrow").style.visibility = "visible";
//  } else {
//    document.getElementById("arrow").style.visibility = "hidden";
//  }
//};

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

// Check form
const loginForm = document.querySelector("#loginPage");

loginForm.addEventListener("submit", (e) => {
  //e.preventDefault();

  if (document.querySelector("#username").value.length == 0) {
    console.log("username empty");
  }

  console.log("emptyfields");
});
