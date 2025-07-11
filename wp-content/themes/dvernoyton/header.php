<?php
  $args = array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => true,       // только категории с товарами
    'parent'     => 0,          // только верхнего уровня
    'orderby'    => 'term_order', // если нужна админская сортировка через плагин
    // 'order'      => 'ASC',
  );

  $product_categories = get_terms( $args );

?>



<!DOCTYPE html>

<html lang="ru">

  <head>

    <meta name="yandex-verification" content="e4618ffbb7dafbd0" />

    <!-- Yandex.Metrika counter -->

    <script type="text/javascript" >

      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};

      m[i].l=1*new Date();

      for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}

      k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})

      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");



      ym(100270480, "init", {

          clickmap:true,

          trackLinks:true,

          accurateTrackBounce:true,

          webvisor:true

      });

    </script>

    <noscript><div><img src="https://mc.yandex.ru/watch/100270480" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

    <!-- /Yandex.Metrika counter -->

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="/wp-content/themes/dvernoyton/assets/images/svg/favicon.ico" type="image/x-icon">

    <? wp_head(); ?>

  </head>

  <body>

    <header class="header">

      <div class="header__container container">

        <div class="header__content">

          <div class="header__left">

            <a href="/" class="image-wrapper header__logo-link">

              <img

                src="/wp-content/themes/dvernoyton/assets/images/pictures/logo.png"

                alt="Логотип ДвернойТон"

                class="image-wrapper__image"

              />

            </a>

            <nav class="header__navigation">

              <div class="header__navigation-link doors-btn">

                <span class="doors-btn__span">Продукция</span>

                <img

                  src="/wp-content/themes/dvernoyton/assets/images/svg/menu.svg"

                  alt="Показать услуги"

                  class="doors-btn__icon"

                />

                <div class="header__dropdown">

                  <nav class="doors-dropdown">

                  <?php

                      // Выводим категории

                      foreach ( $product_categories as $category ) {

                        $cat_link = add_query_arg( 'cat', $category->slug, '/catalog/' );

                        echo '<a href="' . esc_url( $cat_link ) . '" class="doors-dropdown__link">' . esc_html( $category->name ) . '</a>';

                      }

                    ?>



                  </nav>

                </div>

              </div>

              <a href="/about" class="header__navigation-link"

                >О компании</a

              >

              <a href="/projects" class="header__navigation-link"

                >Проекты</a

              >

              <a href="/drawings" class="header__navigation-link"

                >Чертежи</a

              >

              <a href="/dealers" class="header__navigation-link"

                >Для дилеров</a

              >

              <img src="/wp-content/themes/dvernoyton/assets/images/svg/header-line.svg" alt="" />

              <a href="/contacts" class="header__navigation-link"

                >Связаться с нами</a

              >

              <div class="header__navigation-link doors-btn">

                <span class="doors-btn__span">Галерея</span>

                <img

                  src="/wp-content/themes/dvernoyton/assets/images/svg/menu.svg"

                  alt="Показать услуги"

                  class="doors-btn__icon"

                />

                <div class="header__dropdown">

                  <nav class="doors-dropdown">

                    <a href="/gallery-plastic" class="doors-dropdown__link">Двери в пластике CPL</a>

                    <a href="/gallery-composite" class="doors-dropdown__link">Композитные двери POSEIDON</a>

                  </nav>

                </div>

              </div>

            </nav>

          </div>

          <div class="header__right">

            <a href="mailto:info@dvernoyton.com" class="header__email header-email">

              <picture class="header-email__image">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/header-email.svg" alt="" />

              </picture>

              <span>info@dvernoyton.com</span>

            </a>

            <div class="header__social">

              <a href="#" class="header__social-item">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/viber.svg" alt="" />

              </a>

              <a href="#" class="header__social-item">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/whatsup.svg" alt="" />

              </a>

              <a href="#" class="header__social-item">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/tg.svg" alt="" />

              </a>

            </div>

            <button class="header__mobile-btn">

              <picture class="header__burger-image">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/burger-line.svg" alt="" />

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/burger-line.svg" alt="" />

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/burger-line.svg" alt="" />

              </picture>

            </button>

          </div>

        </div>

      </div>

      <div class="mobile-menu">

        <div class="mobile-menu__content">

          <nav class="mobile-menu__navigation">

            <a href="/" class="mobile-menu__navigation-link"

            >Главная</a

            >

            <details class="mobile-menu__navigation-link">

              <summary class="mobile-menu__summary">Продукция</summary>

              <nav class="mobile-menu__doors">

                

                <?php

                  // Выводим категории

                  foreach ( $product_categories as $category ) {

                    $cat_link = add_query_arg( 'cat', $category->slug, '/catalog/' );

                    echo '<a href="' . esc_url( $cat_link ) . '" class="mobile-menu__doors-link">' . esc_html( $category->name ) . '</a>';

                  }

                ?>

              </nav>

            </details>

            <a href="/about" class="mobile-menu__navigation-link"

              >О компании</a

            >

            <a href="/projects" class="mobile-menu__navigation-link"

              >Проекты</a

            >

            <a href="/drawings" class="mobile-menu__navigation-link"

              >Чертежи</a

            >

            <a href="/dealers" class="mobile-menu__navigation-link"

              >Для дилеров</a

            >

            <img

              src="/wp-content/themes/dvernoyton/assets/images/svg/header-mobile-line.svg"

              alt=""

              class="mobile-menu__line"

            />

            <a href="/contacts" class="mobile-menu__navigation-link"

              >Связаться с нами</a

            >

            <details class="mobile-menu__navigation-link">

              <summary class="mobile-menu__summary">Галерея</summary>

              <nav class="mobile-menu__doors">

                <a href="/gallery-plastic" class="mobile-menu__doors-link">Двери в пластике CPL</a>

                <a href="/gallery-composite" class="mobile-menu__doors-link">Композитные двери POSEIDON</a>

              </nav>

            </details>

            <a href="mailto:info@dvernoyton.com" class="header-email">

              <picture class="header-email__image">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/header-email.svg" alt="" />

              </picture>

              <span>info@dvernoyton.com</span>

            </a>

            <div class="header__social header__social--mobile">

              <a href="#" class="header__social-item">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/viber.svg" alt="" />

              </a>

              <a href="#" class="header__social-item">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/whatsup.svg" alt="" />

              </a>

              <a href="#" class="header__social-item">

                <img src="/wp-content/themes/dvernoyton/assets/images/svg/tg.svg" alt="" />

              </a>

            </div>

          </nav>

        </div>

      </div>

    </header>