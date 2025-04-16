<?

// Template Name: Страница проектов



get_header();



$result = get_projects();



// Массивы с данными

$projects = $result['projects'];

$allPartners = $result['allPartners'];

?>

    <main class="main">

      <div class="container">

        <section class="breadcrumbs">

          <a href="/" class="breadcrumbs__link">

            <img src="/wp-content/themes/dvernoyton/assets/images/svg/home.svg" alt="" />

          </a>

          <span class="breadcrumbs__sep">/</span>

          <a href="/projects" class="breadcrumbs__link">Выполненные проекты</a>

        </section>

      </div>

      <section class="map-item">

        <div class="container map-item__container">
          <h1 style="display:none;">Проекты</h1>

          <article class="map-item__item item-card">

            <picture class="image-wrapper item-card__image">

              <img

                src="<?php echo $projects[0]['image']?>"

                alt="<?php echo $projects[0]['imageAlt']?>"

                title="<?php echo $projects[0]['imageTitle']?>"

                class="image-wrapper__image"

              />

            </picture>

            <div class="item-card__content">

              <h2 class="item-card__title">

                <?php echo $projects[0]['title']?>

              </h2>

              <div class="item-card__lower">

                <div class="item-card__info">

                  <!-- <div class="item-card__info-row">

                    <p class="item-card__info-cell">Дверь:</p>

                    <a href="#" id="door-info" class="item-card__info-cell"><?php // echo $projects[0]['door']?></a>

                  </div> -->

                  <div class="item-card__info-row">

                    <p class="item-card__info-cell">Регион:</p>

                    <p class="item-card__info-cell"><?php echo $projects[0]['region']?></p>

                  </div>

                </div>

                <a href="<?php echo $projects[0]['link']?>" class="item-card__link"

                  >Смотреть

                  <picture class="item-card__link-image">

                    <img src="/wp-content/themes/dvernoyton/assets/images/svg/arrow.svg" alt="" />

                  </picture>

                </a>

              </div>

            </div>

          </article>

          <div class="map-item__map" id="map"></div>

        </div>

      </section>

      <!-- <section class="clients">

        <div class="container clients__container clients-items">

          <div

            class="clients-items__item clients-filter clients-filter--active"

            data-id="all"

          >

            <p class="clients-items__item-text" >Все</p>

          </div>

          <div class="clients-items__item clients-filter" data-id="gbu-moskva">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c1.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="magnit">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c2.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="gemotest">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c3.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="nis">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c4.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="tashir">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c5.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="min-svyazi">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c6.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="mgimo">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c7.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="kfc">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c8.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="lenta">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c9.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="x5retail">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c10.jpg"

              draggable="false"

              alt=""

            />

          </div>

          <div class="clients-items__item clients-filter" data-id="min-obr">

            <img

              src="/wp-content/themes/dvernoyton/assets/images/pictures/clients/c11.jpg"

              draggable="false"

              alt=""

            />

          </div>

        </div>

      </section> -->

      <section class="projects">

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

      <? get_callback_form(); ?>

    </main>

    <? get_footer(); ?>