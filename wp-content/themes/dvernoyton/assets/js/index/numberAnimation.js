function animateNumber(element, duration) {
  const target = parseInt(element.getAttribute('data-target'), 10); // Получаем целевое число
  let current = 0;
  const increment = target / (duration / 16); // Рассчитываем шаг анимации (60 FPS)

  function updateNumber() {
      current += increment; // Увеличиваем текущее значение
      if (current < target) {
          element.textContent = Math.floor(current).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Обновляем значение в span
          requestAnimationFrame(updateNumber); // Запрашиваем следующий кадр
      } else {
          element.textContent = target.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Когда достигнем цели, устанавливаем конечное значение
      }
  }

  updateNumber(); // Запускаем анимацию
}

function onIntersection(entries, observer) {
  entries.forEach(entry => {
      if (entry.isIntersecting) { // Если элемент в зоне видимости
          if (!entry.target.classList.contains('animated')) { // Проверяем, была ли анимация
              animateNumber(entry.target, 2000 + Number(entry.target.getAttribute('data-target')) / 10); // Запускаем анимацию
              entry.target.classList.add('animated'); // Отмечаем, что анимация уже произошла
          }
      }
  });
}

const numberElements = document.querySelectorAll('#number'); // Ищем все элементы с классом "number"

const observer = new IntersectionObserver(onIntersection, {
  root: null, // Отслеживание относительно окна браузера
  threshold: 0.5 // Элемент должен быть виден полностью (100%) для запуска анимации
});

numberElements.forEach(element => {
  observer.observe(element); // Начинаем отслеживать каждый элемент
});