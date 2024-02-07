// import "/bootstrap.js";
// import "/styles/app.css";

// start burger menu
const burgerMenu = document.getElementById("burger_open");

const overlay = document.getElementById("menu_burger");

const closeMenu = document.getElementById("menu_burger");

const burgerMenuClose = document.getElementById("burger_close");

burgerMenu.addEventListener("click", function () {
  overlay.classList.add("overlay"),
    (burger_open.style.display = "none"),
    (burger_close.style.display = "block");
});

burgerMenuClose.addEventListener("click", function () {
  overlay.classList.remove("overlay");
  (burger_open.style.display = "block"), (burger_close.style.display = "none");
});
// end burger menu
// end burger menu
