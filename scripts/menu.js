const mob = document.querySelector(".menu-mobile");
const nmenu = document.querySelector(".menu-lista");

mob.addEventListener("click", () => {
  mob.classList.toggle("active");
  nmenu.classList.toggle("active");
});
