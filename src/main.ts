import "./style.css";

const app: HTMLDivElement = document.querySelector("#app")!;

const hamburgerMenu: HTMLDivElement = app.querySelector(".hamburger-menu")!;
const container: HTMLDivElement = app.querySelector(".container")!;

hamburgerMenu.addEventListener("click", () => {
   container.classList.toggle("active");
});
