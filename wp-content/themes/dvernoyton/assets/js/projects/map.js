const filterContainer = document.querySelector(".clients");
const FILTER_CLASS = "clients-filter";
const ACTIVE_FILTER_CLASS = "clients-filter--active";

function onFilterClick(e) {
  const currentFilter = e.target.closest(`.${FILTER_CLASS}`);
  if (!currentFilter) return;
  filterContainer
    .querySelector(`.${ACTIVE_FILTER_CLASS}`)
    .classList.remove(ACTIVE_FILTER_CLASS);
  currentFilter.classList.add(ACTIVE_FILTER_CLASS);
}

const generateMap = async () => {
  const projects = await getPostsData();
  await ymaps.ready(() => {
    init(projects.projects);
  });
};

function decodeHtmlCharCodes(str) {
  return str.replace(/(&#(\d+);)/g, function (match, capture, charCode) {
    return String.fromCharCode(charCode);
  });
}

const getPostsData = async () => {
  try {
    const response = await fetch(`/wp-json/custom/v1/projects/`);

    if (!response.ok) {
      // Если ответ содержит ошибку (например, 404), выбрасываем исключение
      throw new Error(`Error: ${response.status}`);
    }

    const data = await response.json();
    return data;
  } catch (error) {
    console.error(error);
  }
};


function init(projects) {
  const map = new ymaps.Map("map", {
    center: [55.7558, 37.6173], // Координаты Москвы
    zoom: 8,
    controls: ["zoomControl"],
  });
  
  const customPlacemark = createMapPoints(projects, map);

  // Обработчик для фильтрации
  // filterContainer.addEventListener("click", (e) => {
  //   onFilterClick(e);
  //   //filterMapPoints(map, e);
  // });
  map.geoObjects.add(customPlacemark);
}

function createMapPoints(projects, map) {
  console.log(projects)
  projects.forEach((project) => {
    const coordinates = project?.place.split(", ");
    let placemark = new ymaps.Placemark(
      coordinates,
      {
        hintContent: project.title,
      }
      // {
      //   iconLayout: "default#image",
      //   iconImageHref:
      //     "/wp-content/themes/velesstroy/assets/images/svg/point.svg", // Путь к иконке
      //   iconImageSize: [30, 42], // Размер иконки
      //   iconImageOffset: [-15, -42], // Смещение иконки
      // }
    );

    // Добавляем проектную информацию для фильтрации
    placemark.projectData = project;

    // Добавление точки на карту
    map.geoObjects.add(placemark);

    // Добавляем событие на клик по метке для отображения данных в карточке
    placemark.events.add("click", function () {
      showProjectDetails(project);
    });
  });
}

function showProjectDetails(project) {
  document.querySelector(".item-card__title").textContent =
    decodeHtmlCharCodes(project.title);
  //document.querySelector("#door-info").textContent = project.door;
  document.querySelector(
    ".map-item__item .item-card__image img"
  ).src = project.image;
  document.querySelector('.map-item__item a').setAttribute('href', project.link)
  document.querySelector(
    ".map-item__item .item-card__image img"
  ).alt = project.imageAlt;
  document.querySelector(
    ".map-item__item .item-card__image img"
  ).title = project.imageTitle;
}

// function filterMapPoints(map, e) {
//   let selectedPartner = e.target.closest('.clients-filter');
//   if (!selectedPartner) return;
//   const selectedPartnerId = selectedPartner.getAttribute('data-id')
//   // Фильтрация точек на карте
//   map.geoObjects.each(function (geoObject) {
//     let project = geoObject.projectData;
//     let matchesFilter = true;
//     if (!project.partners.includes(selectedPartnerId)) matchesFilter = false
//     if (selectedPartnerId === 'all') matchesFilter = true;

//     geoObject.options.set("visible", matchesFilter);
//   });

//   // // Фильтрация карточек проектов
//   // document.querySelectorAll(".project-items__item").forEach((card) => {
//   //   const cardRegion = card.getAttribute("data-region");
//   //   const cardActivity = card.getAttribute("data-activity");
//   //   let matchesCardFilter = true;

//   //   if (
//   //     selectedActivity &&
//   //     selectedActivity !== "Виды деятельности" &&
//   //     cardActivity !== selectedActivity &&
//   //     selectedActivity !== "Все"
//   //   ) {
//   //     matchesCardFilter = false;
//   //   }

//   //   if (
//   //     selectedRegion &&
//   //     selectedRegion !== "Регион" &&
//   //     cardRegion !== selectedRegion &&
//   //     selectedRegion !== "Все"
//   //   ) {
//   //     matchesCardFilter = false;
//   //   }

//   //   // Показываем или скрываем карточку в зависимости от фильтра
//   //   card.style.display = matchesCardFilter ? "flex" : "none";
//   // });
// }

generateMap();
