<?php
/**
 * Template Name: Single Product Custom
 * Template Post Type: product
 */
get_header();

// Убедимся, что переменная $product является объектом товара
global $product;
if ( ! is_object( $product ) ) {
    $product = wc_get_product( get_the_ID() );
}

$terms = get_the_terms( get_the_ID(), 'product_cat' );

?>
<main class="main product-page">
  <!-- Хлебные крошки -->
   <div class="container">
    <section class="breadcrumbs">
      <a href="<?php echo home_url(); ?>" class="breadcrumbs__link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/home.svg" alt="Главная" />
      </a>
      <span class="breadcrumbs__sep">/</span>
      <?
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            // Берем первую категорию
            $term = array_shift( $terms );
            ?>
            <a href="/catalog/?cat=<?echo $term->slug?>" class="breadcrumbs__link">
              <?php echo esc_html( $term->name ); ?>
            </a>
            <?php
        } else {
            // Если нет категорий, выводим стандартную ссылку
            ?>
            <a href="<?php echo site_url('/catalog'); ?>" class="breadcrumbs__link">Каталог</a>
            <?php
        }
      ?>
      <span class="breadcrumbs__sep">/</span>
      <span class="breadcrumbs__link"><?php the_title(); ?></span>
    </section>
   </div>


  <!-- Баннер продукта (изображения, галерея) -->
  <section class="product-banner">
    <div class="container product-banner__container">
    <div class="product-banner__left">
      <?php
      // Получаем массив ID изображений галереи
      $gallery_ids = $product->get_gallery_image_ids();

      if ( ! empty( $gallery_ids ) ) {
          // Если галерея не пуста, выводим главное изображение из галереи и миниатюры остальных
          $img_url = wp_get_attachment_image_url( $gallery_ids[0], 'large' );
          $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
          
          ?>
          <picture data-fancybox="gallery"  class="product-banner__main-image image-wrapper__image" data-src="<?php echo esc_url( $thumb_url ); ?>">
            <img draggable="false" style="object-fit: contain;" src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" class="image-wrapper__image" />
          </picture>
          <?php
          echo '<div class="product-banner__images">';
          $isFirst = true;
          foreach ( $gallery_ids as $image_id ) {
              if ( $isFirst ) {
                  $isFirst = false;
                  
                  continue;
              }
              $img_url = wp_get_attachment_image_url( $image_id, 'large' );
              ?>
              <picture data-fancybox="gallery" data-src="<?php echo esc_url( $img_url ); ?>" class="product-banner__image image-wrapper__image">
                <img draggable="false" src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="image-wrapper__image" />
              </picture>
              <?php
          }
          echo '</div>';
      } elseif ( has_post_thumbnail() ) {
          // Если галерея пуста, но есть главное изображение, выводим его
          $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
          ?>
          <picture data-fancybox="gallery"  class="product-banner__main-image image-wrapper__image" data-src="<?php echo esc_url( $thumb_url ); ?>">
            <img draggable="false" style="object-fit: contain;" src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" class="image-wrapper__image" />
          </picture>
          <?php
      } else {
          // Если нет ни галереи, ни главного изображения, выводим плейсхолдер
          ?>
          <picture class="product-banner__main-image image-wrapper__image">
            <img draggable="false" src="<?php echo wc_placeholder_img_src(); ?>" alt="Нет изображения" class="image-wrapper__image" />
          </picture>
          <?php
      }
      ?>
    </div>



      <div class="product-banner__right">
        <h1 class="product-banner__title"><?php the_title(); ?></h1>

        <?php
        // Вывод цвета. Предполагается, что цвет задается как атрибут (таксономия pa_cvet)
        $color_terms = wp_get_post_terms( get_the_ID(), 'pa_cvet' );
        if ( ! empty( $color_terms ) && ! is_wp_error( $color_terms ) ) {
            echo '<p class="product-banner__text">Цвет: ' . esc_html( $color_terms[0]->name ) . '</p>';
        }
        ?>

        <!-- Форма с выбором опций -->
        <form class="product-banner__info">
          <?php
          $size_terms = wp_get_post_terms( get_the_ID(), 'pa_razmer' );
          if ( ! empty( $size_terms ) && ! is_wp_error( $size_terms ) ) : 
          ?>
          <div class="product-banner__selection">
            <p class="product-banner__text">Размер по полотну:</p>
            <div class="product-banner__selectors">
              <? foreach ( $size_terms as $term ) : ?>
                <label for="size_<?php echo esc_attr( $term->slug ); ?>" class="product-banner__label">
                  <input type="radio" name="size" id="size_<?php echo esc_attr( $term->slug ); ?>" <?php if( $term === reset( $size_terms ) ) echo 'checked'; ?> />
                  <span class="product-banner__label-text"><?php echo esc_html( $term->name ); ?></span>
                </label>
              <? endforeach;?>    
            </div>
          </div>
          <? endif;?>
          <?php
          // Получаем термины для атрибута "Наличник"
          $nal_terms = wp_get_post_terms( get_the_ID(), 'pa_nalichnik' );
          // Получаем термины для атрибута "Стоимость наличников" – предполагается, что его slug: pa_stoimost_nalichnikov
          $cost_terms = wp_get_post_terms( get_the_ID(), 'pa_stoimost_nalichnikov' );
          if ( ! empty( $nal_terms ) && ! is_wp_error( $nal_terms ) ) : 
          ?>
          <div class="product-banner__selection">
            <p class="product-banner__text">Наличник:</p>
            <div class="product-banner__selectors">
              <?php 
              // Предполагаем, что порядок терминов в обеих таксономиях совпадает
              foreach ( $nal_terms as $index => $term ) : 
                $cost = '';
                if ( ! empty( $cost_terms ) && isset( $cost_terms[$index] ) ) {
                    // Получаем стоимость из имени термина стоимости (например, "4850")
                    $cost = trim( $cost_terms[$index]->name );
                }
                // Формируем отображаемое название: если стоимость есть, добавляем её в скобках
                $display_name = $term->name;
                if ( '' !== $cost ) {
                    $display_name .= ' (' . $cost . 'р.)';
                }
              ?>
                <label for="nal_<?php echo esc_attr( $term->slug ); ?>" class="product-banner__label">
                  <input type="radio" name="nal" data-cost="<?php echo esc_attr( $cost ); ?>" id="nal_<?php echo esc_attr( $term->slug ); ?>" <?php if( $term === reset( $nal_terms ) ) echo 'checked'; ?> />
                  <span class="product-banner__label-text"><?php echo esc_html( $display_name ); ?></span>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>


          <div class="product-banner__selection">
            <p class="product-banner__text">Требуемое кол-во:</p>
            <input type="number" placeholder="1" value="1" name="count" class="product-banner__input" />
          </div>
        </form>

        <div class="product-banner__submit">
          <p class="product-banner__price">
            Цена: <span class="product-banner__number"><?php echo $product->get_regular_price(); ?></span>р.
          </p>
          <button class="solid-button product-banner__button">Запросить КП</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Характеристики товара -->
  <section class="product-specs">
    <div class="container product-specs__container">
      <div class="product-specs__left">
        <h2 class="title-h2 product-specs__title">Характеристики</h2>
        <div class="product-specs__row">
          <p class="product-specs__column">Вес:</p>
          <p class="product-specs__column"><?php echo $product->get_weight() ? $product->get_weight() . ' Кг' : '—'; ?></p>
        </div>
        <div class="product-specs__row">
          <p class="product-specs__column">Базовая цена:</p>
          <p class="product-specs__column"><?php echo $product->get_regular_price() ? $product->get_regular_price() . ' ₽' : '—'; ?></p>
        </div>
        <div class="product-specs__row">
          <p class="product-specs__column">Производитель:</p>
          <p class="product-specs__column"><?php echo $product->get_attribute('pa_proizvoditel') ? $product->get_attribute('pa_proizvoditel') : '—'; ?></p>
        </div>
        <div class="product-specs__row">
          <p class="product-specs__column">Назначение:</p>
          <p class="product-specs__column">Влагостойкие, для общественных зданий, медицинские</p>
        </div>
      </div>
      <div class="product-specs__qna">
        <h2 class="product-specs__qna-title">Задать вопрос специалисту</h2>
        <p class="product-specs__qna-text">
          Наши специалисты помогут с выбором и ответят на все вопросы
        </p>
        <a href="#form" class="solid-button product-specs__qna-link">Получить консультацию</a>
      </div>
    </div>
  </section>

  <!-- Описание товара -->
  <section class="product-description">
    <div class="container">
      <div class="product-description__content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <!-- Похожие товары -->
  <section class="product-other">
    <div class="container">
      <h2 class="title-h2">Похожие товары</h2>
    </div>
    <div class="container product-other__container">
      <?php
      $related = wc_get_related_products( get_the_ID(), 4 );
      if ( ! empty( $related ) ) {
          $args = array(
              'post_type'      => 'product',
              'post__in'       => $related,
              'posts_per_page' => 4,
          );
          $related_query = new WP_Query( $args );
          if ( $related_query->have_posts() ) {
              while ( $related_query->have_posts() ) {
                  $related_query->the_post();
                  global $product;
                  $img_url = '';
                  $gallery = $product->get_gallery_image_ids();
                  if ( ! empty( $gallery ) ) {
                      $img_url = wp_get_attachment_image_url( $gallery[0], 'medium' );
                  } elseif ( has_post_thumbnail() ) {
                      $img_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                  } else {
                      $img_url = wc_placeholder_img_src();
                  }
                  ?>
                  <article class="product-other__item catalog-item" data-aos="fade-up">
                    <a href="<?php the_permalink(); ?>" class="image-wrapper catalog-item__image">
                      <img src="<?php echo esc_url( $img_url ); ?>" draggable="false" alt="<?php the_title_attribute(); ?>" class="image-wrapper__image" />
                    </a>
                    <h3 class="catalog-item__title"><?php the_title(); ?></h3>
                    <p class="catalog-item__price">от <?php echo $product->get_price_html(); ?></p>
                    <div class="catalog-item__specs">
                      <p class="catalog-item__spec">Комплект:</p>
                      <p class="catalog-item__spec">(полотно + коробка)</p>
                    </div>
                    <div class="catalog-item__specs">
                      <p class="catalog-item__spec">Наличие:</p>
                      <p class="catalog-item__spec"><?php echo $product->is_in_stock() ? 'На складе' : 'Под заказ'; ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="catalog-item__link solid-button">Подробнее</a>
                  </article>
                  <?php
              }
              wp_reset_postdata();
          }
      }
      ?>
    </div>
  </section>

  <?php get_callback_form(); ?>
</main>

<?php get_footer(); ?>
