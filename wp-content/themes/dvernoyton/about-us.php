<?

// Template Name: Страница о компании

get_header('banner');

$result = get_projects(4);





$projects = $result['projects']

?>

    <main class="main">

      <section class="main-banner main-banner--small-p">
        <img draggable="false" src="/wp-content/themes/dvernoyton/assets/images/pictures/index/banner.jpg" alt="" class="main-banner__image">
        <div class="container main-banner__container">

          <h1 class="main-banner__title">О компании</h1>

          <p class="main-banner__text">

            Наша компания является крупнейшим поставщиком влагостойких дверей в

            России. Мы обладаем самым широким ассортиментом цветовых и

            технических решений для вашего бизнеса

          </p>

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

            <p class="doors-info__text">

            Дверной Тон — ведущий производитель специализированных дверей на российском рынке. Мы предлагаем широкий выбор дверей для любых нужд, гарантируя надежность, качество и лучшие условия для партнеров.

            </p>

          </div>

        </div>

      </section>

      <section class="offer">

        <div class="container offer__container">

          <div class="offer__left">

            <div class="offer__block">

              <h2 class="offer__title title-h2">Что мы предлагаем?</h2>

              <p class="offer__text">

                Влагостойкие двери — основной продукт, разработанный с учётом

                требований к долговечности, герметичности и эстетике.

                Противопожарные двери — соответствуют строгим стандартам

                безопасности. Медицинские двери — влагостойкие и

                антибактериальные, для клиник, лабораторий и больниц. Двери для

                спортивных объектов — с иллюминаторами, вентиляционными

                решётками и влагозащитой.

              </p>

              <a href="/#products" class="offer__button solid-button"

                >Открыть каталог</a

              >

            </div>

            <div class="offer__block">

              <h2 class="offer__title title-h2">Наша миссия</h2>

              <p class="offer__text">

                Создавать надёжные и качественные решения для оснащения объектов

                любого масштаба: от частных домов до крупных производственных

                предприятий, административных зданий и спортивных комплексов.

              </p>

            </div>

          </div>

          <div class="offer__right">

            <div class="offer__block">

              <h2 class="offer__title title-h2">Среди наших клиентов</h2>

              <div class="offer__clients clients-items">

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c1.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c2.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c3.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c4.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c5.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c6.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c7.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c8.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c9.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c10.jpg" alt="" />

                </div>

                <div class="clients-items__item">

                  <img src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c11.jpg" alt="" />

                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

      <section class="advantages">

        <div class="container">

          <h2 class="title-h2 advantages__title">Наши преимущества</h2>

        </div>

        <div class="container advantages__container">

          <article class="advantages__item">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/svg/about/eu.svg"

              alt=""

              class="advantages__item-image"

            />

            <h2 class="title-h2 advantages__item-title">

              Европейское качество

            </h2>

            <p class="advantages__item-text">

              Продукция соответствует международным стандартам

            </p>

          </article>

          <article class="advantages__item">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/svg/about/storage.svg"

              alt=""

              class="advantages__item-image"

            />

            <h2 class="title-h2 advantages__item-title">

              Огромный складской запас

            </h2>

            <p class="advantages__item-text">

              Быстрая отгрузка даже крупных партий

            </p>

          </article>

          <article class="advantages__item">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/svg/about/individual.svg"

              alt=""

              class="advantages__item-image"

            />

            <h2 class="title-h2 advantages__item-title">

              Индивидуальный подход

            </h2>

            <p class="advantages__item-text">

              Мы учитываем потребности каждого клиента

            </p>

          </article>

          <article class="advantages__item">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/svg/about/assortment.svg"

              alt=""

              class="advantages__item-image"

            />

            <h2 class="title-h2 advantages__item-title">Широкий ассортимент</h2>

            <p class="advantages__item-text">От бюджетных до премиум-решений</p>

          </article>

          <article class="advantages__item">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/svg/about/production.svg"

              alt=""

              class="advantages__item-image"

            />

            <h2 class="title-h2 advantages__item-title">

              Собственное производство

            </h2>

            <p class="advantages__item-text">

              Полный контроль качества на всех этапах

            </p>

          </article>

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

                  <a href="<?php echo $project['link']?>" class="item-card__link"

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

      <section class="certificates">

        <div class="container">

          <h2 class="title-h2 certificates__title">Сертификаты</h2>

        </div>

        <div class="container certificates__container">

          <article class="certificates__item">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-1.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-1.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Сертификат соответствия на композитные влагостойкие двери POSEIDON по ГОСТ 475-2016 и ГОСТ 30970-2014

            </h3>

          </article>

          <article class="certificates__item">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-2.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-2.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Сертификат соответствия на композитные влагостойкие двери POSEIDON по ГОСТ P ИСО 14644-4-2002 «Чистые помещения и связанные с ними контролируемые среды. Часть 4»

            </h3>

          </article>

          <article class="certificates__item">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-3.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-3.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            ПРОТОКОЛ ИСПЫТАНИЙ № 08837-МС-2022 от 29.04.2022 1

            </h3>

          </article>

          <article class="certificates__item">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-4.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-4.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            ПРОТОКОЛ ИСПЫТАНИЙ № 08837-МС-2022 от 29.04.2022 2

            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-5.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-5.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            ПРОТОКОЛ ИСПЫТАНИЙ № 08838-МС-2022 от 29.04.2022 1

            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-6.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-6.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            ПРОТОКОЛ ИСПЫТАНИЙ № 08838-МС-2022 от 29.04.2022 2

            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-7.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-7.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            ПРОТОКОЛ ИСПЫТАНИЙ № 08839-МС-2022 от 29.04.2022 1

            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-8.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-8.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            ПРОТОКОЛ ИСПЫТАНИЙ № 08839-МС-2022 от 29.04.2022 2

            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-9.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-9.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            ПРОТОКОЛ ИСПЫТАНИЙ № 08839-МС-2022 от 29.04.2022 3



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-10.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-10.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Сертификат соответствия пожарной безопасности



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-11.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-11.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Экспертное заключение 1



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-12.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-12.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Экспертное заключение 2



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-13.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-13.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Экспертное заключение 3



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-14.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-14.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Экспертное заключение Дверные блоки 1



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-15.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-15.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Экспертное заключение Дверные блоки 2



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-16.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-16.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Экспертное заключение Дверные блоки 3



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-17.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-17.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Протокол испытаний мд3 класс ударопрочности 1



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-18.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-18.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Протокол испытаний мд3 класс ударопрочности 2



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-19.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-19.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Протокол испытаний мд3 класс ударопрочности 3



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-20.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-20.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Протокол испытаний мд3 класс ударопрочности 4



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-21.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-21.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Протокол испытаний мд3 класс ударопрочности 5



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-22.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-22.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Протокол испытаний мд3 класс ударопрочности 6



            </h3>

          </article>

          <article class="certificates__item certificates__item--hidden">

            <picture

              data-fancybox

              data-src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-23.jpg"

              class="image-wrapper certificates__item-image"

            >

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/about/sertifikat-23.jpg"

                alt=""

                class="image-wrapper__image"

              />

            </picture>

            <h3 class="certificates__item-title">

            Протокол испытаний мд3 класс ударопрочности 7



            </h3>

          </article>

        </div>

        <div class="container">

          <button class="solid-button certificates__button">Показать больше</button>

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

                <div class="qna__modal">Регистрация объекта дает дилеру эксклюзивное право на продажу наших дверей для зарегистрированного объекта, защищая его от конкуренции и обеспечивая гарантированный объем поставок.</div>

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

      <? get_callback_form(); ?>

    </main>

<?php get_footer(); ?>