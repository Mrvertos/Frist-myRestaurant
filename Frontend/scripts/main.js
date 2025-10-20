function number() {
  alert("شماره : 09101105522");
}

// document.querySelectorAll(".header-btn-call").alert = "salam";

window.addEventListener("scroll", function () {
  const header = document.getElementById("header");
  const headerTitle = document.querySelector(".header-title");

  if (window.scrollY > 10) {
    header.classList.add("scrolled");
    headerTitle.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
    headerTitle.classList.remove("scrolled");
  }
});
