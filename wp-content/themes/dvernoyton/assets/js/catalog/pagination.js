document.addEventListener("DOMContentLoaded", function() {
  let currentPage = 2; // первая страница уже загружена
  let loading = false;
  let noMoreProducts = false;
  let currentFilters = {}; // глобальный объект, где хранятся выбранные фильтры

  // Функция для сбора фильтров из интерфейса
  function collectFilters() {
    let collectedFilters = {};
    document.querySelectorAll(".catalog__filters .catalog__filter").forEach(function (group) {
      // Имя группы фильтра, например, "Серия"
      const groupName = group
        .querySelector(".catalog__filter-name")
        .textContent.trim()
        .toLowerCase();
      const checkboxes = group.querySelectorAll('input[type="checkbox"]');
      let values = [];
      checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
          // Значение уже задано в атрибуте value, которое должно быть slug терма
          values.push(checkbox.getAttribute("value"));
        }
      });
      if (values.length > 0) {
        collectedFilters[groupName] = values;
      }
    });
    return collectedFilters;
  }
  // Функция для получения параметра из URL
  function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    const results = regex.exec(window.location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
  }
  // Если пользователь нажимает на кнопку "Поиск" фильтров, обновляем currentFilters и сбрасываем пагинацию
  const filterButton = document.querySelector(".catalog__filters-button");
  const openFilter = document.querySelector(".catalog__filter-button");

  filterButton.addEventListener("click", function(e) {
    e.preventDefault();
    window.scrollTo({top: 0})
    // Тогглим видимость фильтров (если нужно)
    openFilter.classList.toggle("catalog__filter-button--active");
    document.querySelector(".catalog__filters-list").classList.toggle("catalog__filters--opened");
    
    // Обновляем текущие фильтры
    currentFilters = collectFilters();

    // Если в URL есть параметр "cat", добавляем его
    const catParam = getUrlParameter("cat");
    if (catParam) {
      currentFilters['категория'] = catParam;
    }
    // Сбрасываем контент каталога и пагинацию
    document.querySelector('.catalog__items').innerHTML = "";
    currentPage = 1; // начинаем с первой страницы
    // Загружаем первую порцию товаров по фильтрам
    loadMoreProducts(true);
  });

  // Функция загрузки товаров
  function loadMoreProducts(reset = false) {
    if (loading || noMoreProducts) return;
    loading = true;

    const formData = new FormData();
    formData.append("action", "filter_products");
    formData.append("page", currentPage);
    // Если фильтры применены, отправляем их
    formData.append("filters", JSON.stringify(currentFilters));
    const container = document.querySelector('.catalog__items');
    container.insertAdjacentHTML('beforeend', '<p class="catalog__placeholder">Загрузка...</p>')
    fetch(myAjax.ajax_url, {
      method: "POST",
      credentials: "same-origin",
      body: formData
    })
      .then((response) => response.text())
      .then((data) => {
        // Если reset, заменяем контент; иначе добавляем в конец
        if (reset) {
          container.innerHTML = data;
        } else {
          container.insertAdjacentHTML('beforeend', data);
        }
        AOS.refreshHard(); // Перезапускаем AOS для новых элементов
        // Если ответ пустой, больше товаров нет
        if (data.trim() === "") {
          noMoreProducts = true;
        } else {
          currentPage++;
        }
        loading = false;
      })
      .catch((error) => {
        console.error("Ошибка загрузки товаров:", error);
        loading = false;
      })
      .finally(() => {
        container.querySelector('.catalog__placeholder').remove();
      });
  }

  // Бесконечная прокрутка: при достижении низа страницы вызываем загрузку
  function handleScroll() {
    const container = document.querySelector('.catalog__items');
    if ((window.innerHeight + window.scrollY) >= container.offsetHeight - 500 && (window.innerHeight + window.scrollY) < container.offsetHeight) {
      loadMoreProducts();
    }
  }
  window.addEventListener('scroll', handleScroll);
});
