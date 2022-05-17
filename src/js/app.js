const hamburgerMenu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");

hamburgerMenu.addEventListener("click", () => {
   container.classList.toggle("active");
});
