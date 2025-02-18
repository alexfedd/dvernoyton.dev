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
  searchButton.addEventListener("click", function (e) {
    e.preventDefault();

    // Тогглим классы для открытия/закрытия фильтров
    filterButton.classList.toggle("catalog__filter-button--active");
    filters.classList.toggle("catalog__filters--opened");

    // Собираем данные фильтров
    let collectedFilters = {};
    document.querySelectorAll(".catalog__filters .catalog__filter").forEach(function (group) {
      // Имя группы фильтра (например, "Серия")
      const groupName = group
        .querySelector(".catalog__filter-name")
        .textContent.trim()
        .toLowerCase();
      const checkboxes = group.querySelectorAll('input[type="checkbox"]');
      let values = [];
      checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
          // Используем атрибут value или id – здесь id
          values.push(checkbox.getAttribute("value"));
        }
      });
      if (values.length > 0) {
        collectedFilters[groupName] = values;
      }
    });

    console.log("Collected filters:", collectedFilters);

    // Готовим данные для отправки
    const formData = new FormData();
    formData.append("action", "filter_products");
    formData.append("filters", JSON.stringify(collectedFilters));

    // Показываем загрузку
    catalogItemsContainer.innerHTML = "<p>Загрузка...</p>";

    // Отправляем запрос через fetch
    fetch(myAjax.ajax_url, {
      method: "POST",
      credentials: "same-origin",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        catalogItemsContainer.innerHTML = data;
      })
      .catch((error) => {
        console.error("Ошибка фильтрации:", error);
        catalogItemsContainer.innerHTML = "<p>Ошибка фильтрации.</p>";
      });
  });
});
