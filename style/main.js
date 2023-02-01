let ul = document.querySelector(".ul");
let svg = document.querySelector(".burger");

svg.addEventListener("click", () => {
  ul.classList.toggle("show");
});
