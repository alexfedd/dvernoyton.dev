const doorsBtns = document.querySelectorAll(".doors-btn");
const doorsDropdowns = document.querySelectorAll(".header__dropdown");

doorsBtns.forEach((doorsBtn, key) => {
  doorsBtn.addEventListener("mouseover", () => {
    doorsDropdowns[key].classList.add("header__dropdown--active");
  });

  doorsBtn.addEventListener("mouseleave", () => {
    doorsDropdowns[key].classList.remove("header__dropdown--active");
  });
});

doorsDropdowns.forEach((doorsDropdown) => {
  doorsDropdown.addEventListener("mouseleave", () => {
    doorsDropdown.classList.remove("header__dropdown--active");
  });
});

const mobileMenu = document.querySelector(".mobile-menu__content");

const openBtn = document.querySelector(".header__mobile-btn");

const closeBtn = document.querySelector(".mobile-menu__close-btn");

const mobileMenuWrapper = document.querySelector(".mobile-menu");

openBtn.addEventListener("click", (e) => {
  mobileMenu.classList.toggle("mobile-menu__content--opened");
  openBtn.classList.toggle("header__mobile-btn--active");
});

mobileMenuWrapper.addEventListener("click", (e) => {
  if (
    e.target === e.currentTarget ||
    e.target.closest(".mobile-menu__close-btn") ||
    e.target.closest("a")
  ) {
    mobileMenu.classList.remove("mobile-menu__content--opened");
    openBtn.classList.toggle("header__mobile-btn--active");
  }
});
