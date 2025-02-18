ymaps.ready(init);

function init() {
  // Инициализация карты
  var myMap = new ymaps.Map("map", {
    center: [55.66, 37.64], // Координаты Москвы (пример)
    zoom: 10,
    controls: ["zoomControl", "typeSelector", "fullscreenControl"],
    theme: 'dark'
  });

  // Две точки в Москве
  var point1 = [55.648484, 37.50186];
  var point2 = [55.540047, 37.968068];

  // Создаём placemark для первой точки
  var placemark1 = new ymaps.Placemark(
    point1,
    {
      hintContent: "Офис",
      balloonContent: "Адрес офиса улица Миклухо-Маклая, 8с3",
    },
    {
      preset: "islands#bluePocketCircleIcon",
    }
  );

  // Создаём placemark для второй точки
  var placemark2 = new ymaps.Placemark(
    point2,
    {
      hintContent: "Производство",
      balloonContent: "Адрес склада/производства деревня Нижнее Мячково, 111",
    },
    {
      preset: "islands#blueFactoryCircleIcon",
    }
  );

  // Добавляем точки на карту
  myMap.geoObjects.add(placemark1).add(placemark2);

  // Автоматически масштабируем/центрируем так, чтобы обе точки были видны
}
