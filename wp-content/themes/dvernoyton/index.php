<?
// Template Name: Главная страница
get_header('banner');
$result = get_projects(4);

// Массивы с данными
$projects = $result['projects'];
?>

    <main class="main">
      <section class="main-banner">
        <div class="container main-banner__container">
          <h1 class="main-banner__title">
            Производство композитных влагостойких дверей POSEIDON
          </h1>
          <p class="main-banner__text">
            Наша компания является крупнейшим поставщиком влагостойких дверей в
            России. Мы обладаем самым широким ассортиментом цветовых и
            технических решений для вашего бизнеса
          </p>
          <div class="main-banner__buttons">
            <a href="#form" class="solid-button main-banner__consulting-button"
              >Бесплатная консультация</a
            >
            <a
              href="#products"
              class="solid-button main-banner__production-button"
              >Продукция</a
            >
          </div>
        </div>
      </section>
      <section class="doors-info">
        <div class="container doors-info__container">
          <div class="doors-info__left">
            <h2 class="title-h2 doors-info__title">
              ВЛАГОСТОЙКИЕ ДВЕРИ POSEIDON <span>ДЛЯ ЛЮБЫХ ЗАДАЧ</span>
            </h2>
            <div class="doors-info__items">
              <div class="doors-info__item">
                <p class="doors-info__item-number">
                  <span id="number" data-target="5000">0</span> +
                </p>
                <p class="doors-info__item-text">
                  реализованных объектов за 5 лет работы
                </p>
              </div>
              <div class="doors-info__item">
                <p class="doors-info__item-number">
                  <span id="number" data-target="70">0</span> +
                </p>
                <p class="doors-info__item-text">
                  специалистов с профильным образованием
                </p>
              </div>
              <div class="doors-info__item">
                <p class="doors-info__item-number">
                  <span id="number" data-target="2500">0</span> +
                </p>
                <p class="doors-info__item-text">
                  дверей уже находятся на складе
                </p>
              </div>
              <div class="doors-info__item">
                <p class="doors-info__item-number">
                  <span id="number" data-target="3500">0</span> м²
                </p>
                <p class="doors-info__item-text">
                  производственных площадей, оснащенных современным
                  оборудованием
                </p>
              </div>
            </div>
          </div>
          <div class="doors-info__right">
            <picture class="image-wrapper doors-info__image">
              <img
                src="/wp-content/themes/dvernoyton/assets/images/pictures/index/door.jpg"
                alt=""
                draggable="false"
                class="image-wrapper__image"
              />
            </picture>
            <p class="doors-info__text">
              Композитные двери с минимальным процентом брака, благодаря отделу
              контроля качества на каждом этапе производства
            </p>
            <p class="doors-info__subtitle">
              Готовы узнать, что такое настоящее качество?
            </p>
            <a href="#form" class="solid-button doors-info__button"
              >Да, отправьте КП</a
            >
          </div>
        </div>
      </section>
      <section id="products" class="categories">
        <div class="container">
          <h2 class="title-h2 categories__title">КАТАЛОГ ПРОДУКЦИИ</h2>
        </div>
        <div class="container categories__container">
          <article class="categories__item">
            <picture class="image-wrapper categories__item-image">
              <img
                src="/wp-content/themes/dvernoyton/assets/images/pictures/index/item-1.jpg"
                alt=""
                draggable="false"
                class="image-wrapper__image"
              />
            </picture>
            <h3 class="categories__item-title">Композитные двери</h3>
            <a href="/catalog/?cat=composite" class="categories__item-link"
              >Перейти в раздел
              <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/item-arrow.svg" alt=""
            /></a>
          </article>
          <article class="categories__item">
            <picture class="image-wrapper categories__item-image">
              <img
                src="/wp-content/themes/dvernoyton/assets/images/pictures/index/item-2.jpg"
                alt=""
                draggable="false"
                class="image-wrapper__image"
              />
            </picture>
            <h3 class="categories__item-title">Двери из нержавеющей стали</h3>
            <a href="/catalog/?cat=stainless" class="categories__item-link"
              >Перейти в раздел
              <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/item-arrow.svg" alt=""
            /></a>
          </article>
          <article class="categories__item">
            <picture class="image-wrapper categories__item-image">
              <img
                src="/wp-content/themes/dvernoyton/assets/images/pictures/index/item-3.jpg"
                alt=""
                draggable="false"
                class="image-wrapper__image"
              />
            </picture>
            <h3 class="categories__item-title">Фурнитура</h3>
            <a href="/catalog/&cat=furniture" class="categories__item-link"
              >Перейти в раздел
              <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/item-arrow.svg" alt=""
            /></a>
          </article>
          <article class="categories__item categories__item--bright">
            <picture class="image-wrapper categories__item-image">
              <img
                src="/wp-content/themes/dvernoyton/assets/images/pictures/index/item-4.jpg"
                alt=""
                draggable="false"
                class="image-wrapper__image"
              />
            </picture>
            <h3 class="categories__item-title">Аксессуары</h3>
            <a href="/catalog/?cat=accessories" class="categories__item-link"
              >Перейти в раздел
              <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/item-arrow-blackl.svg" alt=""
            /></a>
          </article>
        </div>
      </section>
      <section class="priority">
        <div class="container">
          <h2 class="title-h2 priority__title">
            <span>Ваш бизнес в приоритете,</span><br />
            наша задача – обеспечить надежность и выгодные условия
          </h2>
        </div>
        <div class="container priority__container">
          <div class="priority__left swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <picture class="image-wrapper priority__image">
                  <img
                    src="/wp-content/themes/dvernoyton/assets/images/pictures/index/slider.jpg"
                    alt=""
                    class="image-wrapper__image"
                  />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="image-wrapper priority__image">
                  <img
                    src="/wp-content/themes/dvernoyton/assets/images/pictures/index/slider.jpg"
                    alt=""
                    class="image-wrapper__image"
                  />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="image-wrapper priority__image">
                  <img
                    src="/wp-content/themes/dvernoyton/assets/images/pictures/index/slider.jpg"
                    alt=""
                    class="image-wrapper__image"
                  />
                </picture>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="priority__right">
            <p class="priority__text">
              Компания «Дверной тон» предлагает качественные и долговечные
              решения для современных объектов. Мы занимаемся производством и
              продажей композитных влагостойких дверей, которые устойчивы к
              воздействию воды и механическим повреждениям. Наши двери идеально
              подходят для использования в жилых помещениях, общественных
              зданиях, коммерческих и промышленных объектах.
            </p>
            <ul class="priority__list">
              <li class="priority__list-item">
                <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/control.svg" alt="" />
                Контроль качества на всех этапах
              </li>
              <li class="priority__list-item">
                <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/quality.svg" alt="" />
                Используем качественные комплектующие
              </li>
              <li class="priority__list-item">
                <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/conditions.svg" alt="" />
                Прозрачные условия сотрудничества
              </li>
              <li class="priority__list-item">
                <img src="/wp-content/themes/dvernoyton/assets/images/svg/index/production.svg" alt="" />
                Короткие сроки изготовления
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="projects">
        <div class="container">
          <h2 class="title-h2 projects__title">
            <span>ВЫПОЛНЕННЫЕ</span> ПРОЕКТЫ
          </h2>
        </div>
        <div class="container projects__container">
        <? $counter = false; ?>
          <?php foreach ($projects as $project) : ?>
            <article
              class="projects__item item-card"
              data-aos="fade-up"
              data-aos-delay="<?echo $counter ? '500' : '100'?>"
            >
              <picture class="image-wrapper item-card__image">
                <img
                  src="<?php echo $project['image']?>"
                  alt="<?php echo $project['imageAlt']?>"
                  title="<?php echo $project['imageTitle']?>"
                  class="image-wrapper__image"
                />
              </picture>
              <div class="item-card__content">
                <h2 class="item-card__title">
                <?php echo $project['title']?>
                </h2>
                <div class="item-card__lower">
                  <div class="item-card__info">
                    <!-- <div class="item-card__info-row">
                      <p class="item-card__info-cell">Дверь:</p>
                      <a href="#" class="item-card__info-cell"><?php // echo $project['door']?></a>
                    </div> -->
                    <div class="item-card__info-row">
                      <p class="item-card__info-cell">Регион:</p>
                      <p class="item-card__info-cell"><?php echo $project['region']?></p>
                    </div>
                  </div>
                  <a href="#" class="item-card__link"
                    >Смотреть
                    <picture class="item-card__link-image">
                      <img src="/wp-content/themes/dvernoyton/assets/images/svg/arrow.svg" alt="" />
                    </picture>
                  </a>
                </div>
              </div>
            </article>
          <? $counter = !$counter;?>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="dealers-banner">
        <div class="container dealers-banner__container">
          <div class="dealers-banner__left">
            <h1 class="title-1 dealers-banner__title">
              эксклюзивные условия <span>для дилеров</span>
            </h1>
            <ol class="dealers-banner__list">
              <li class="dealers-banner__list-item qna">
                Регистрация объекта
                <div class="qna__button">?</div>
                <div class="qna__modal">Текст какой-то тут написан</div>
              </li>
              <li class="dealers-banner__list-item">
                Огромный ассортимент продукции
              </li>
              <li class="dealers-banner__list-item">
                Можем делать двери под Вашим брендом
              </li>
              <li class="dealers-banner__list-item">
                Большое кол-во продукции на складе
              </li>
            </ol>
            <a href="/dealers" class="dealers-banner__button solid-button"
              >Для дилеров</a
            >
          </div>
          <picture class="dealers-banner__right image-wrapper">
            <img
              src="/wp-content/themes/dvernoyton/assets/images/pictures/dealers/banner.jpg"
              alt=""
              class="image-wrapper__image"
            />
          </picture>
        </div>
      </section>
      <? get_callback_form() ?>
    </main>
    <? get_footer(); ?>