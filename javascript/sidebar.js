const menuToggle = document.querySelectorAll(".menu-toggle");
const submenu = document.querySelectorAll(".submenu");

for (let i = 0; i < menuToggle.length; i++) {
  menuToggle[i].addEventListener("click", () => {
    submenu[i].classList.toggle("hidden");
  });
}
