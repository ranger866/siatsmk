const burger = document.getElementById("burger");
const navbar = document.getElementById("sidebar");

burger.addEventListener("click", () => {
  sidebar.classList.toggle("active");
});
