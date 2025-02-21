document.addEventListener("DOMContentLoaded", function() {
  const filterButton = document.querySelector(".catalog__filter-button");
  const filters = document.querySelector(".catalog__filters-list");
  const catalogItemsContainer = document.querySelector(".catalog__items");
  const searchButton = document.querySelector('.catalog__filters-button')

  // Функция для установки высоты фильтров (CSS-переменная)
  function setFiltersHeight() {
    if (filters) {
      document.documentElement.style.setProperty(
        "--filters-height",
        filters.scrollHeight + "px"
      );
    }
  }
  window.addEventListener("resize", setFiltersHeight);
  setFiltersHeight();

  // Единый обработчик клика по кнопке фильтров
  filterButton.addEventListener("click", function (e) {
    e.preventDefault();
    // Тогглим классы для открытия/закрытия фильтров
    filterButton.classList.toggle("catalog__filter-button--active");
    filters.classList.toggle("catalog__filters--opened");


  });
});
