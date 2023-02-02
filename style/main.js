let ul = document.querySelector(".ul");
let svg = document.querySelector(".burger");

svg.addEventListener("click", () => {
  ul.classList.toggle("show");
});

let mouse = document.querySelector(".mousemove");

window.addEventListener("mousemove", (e) => {
  mouse.style.left = e.pageX + "px";
  mouse.style.top = e.pageY + "px";
});

let typed = new Typed("#typed", {
  strings: [
    "Hello world ^200",
    "<strong>Yassine Aidouni </strong> Développeur Web et Web mobile.",
  ],
});
