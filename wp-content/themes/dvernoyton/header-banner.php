<?php 
$args = array(
  'taxonomy'   => 'product_cat',
  'orderby'    => 'name',
  'order'      => 'ASC',
  'hide_empty' => false,
  'parent'     => 0, // выводим только родительские категории
);
$product_categories = get_terms( $args );

// Пример пользовательского порядка (укажите slug категорий в нужном вам порядке)
$custom_order = array(
  'composite' => 1,
  'stainless'       => 2,
  'pogonazh'          => 3,
  'furniture'         => 4,
  'accessories'        => 5,
);

if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
  // Отфильтруем, чтобы исключить 'uncategorized'
  $filtered_categories = array();
  foreach ( $product_categories as $cat ) {
    if ( 'uncategorized' === $cat->slug ) {
      continue;
    }
    $filtered_categories[] = $cat;
  }
  
  // Отсортируем категории по заданному порядку
  usort( $filtered_categories, function( $a, $b ) use ( $custom_order ) {
    $order_a = isset( $custom_order[ $a->slug ] ) ? $custom_order[ $a->slug ] : 999;
    $order_b = isset( $custom_order[ $b->slug ] ) ? $custom_order[ $b->slug ] : 999;
    return $order_a - $order_b;
  });
}
?><!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/wp-content/themes/dvernoyton/assets/images/svg/favicon.ico" type="image/x-icon">
    <? wp_head(); ?>
  </head>
  <body>
    <header class="header header--on-banner">
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
                    foreach ( $filtered_categories as $category ) {
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
              <a href="/quarters" class="header__navigation-link"
                >Чертежи</a
              >
              <a href="/dealers" class="header__navigation-link"
                >Для дилеров</a
              >
              <img src="/wp-content/themes/dvernoyton/assets/images/svg/header-line.svg" alt="" />
              <a href="/contacts" class="header__navigation-link"
                >Связаться с нами</a
              >
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
                  foreach ( $filtered_categories as $category ) {
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
            <a href="/quarters" class="mobile-menu__navigation-link"
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