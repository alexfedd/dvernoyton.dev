<?
// Template Name: Страница каталога

get_header();
// Получаем выбранную категорию (если есть)
$selected_cat = isset( $_GET['cat'] ) ? sanitize_text_field( $_GET['cat'] ) : '';
if ( ! empty( $selected_cat ) ) {
  $term = get_term_by( 'slug', $selected_cat, 'product_cat' );
  $current_cat_name = $term ? $term->name : 'Каталог';
  $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
  $thumbnail_url = wp_get_attachment_image_url( $thumbnail_id, 'large' );
} else {
  $current_cat_name = 'Каталог';
  $thumbnail_url = '/wp-content/themes/dvernoyton/assets/images/pictures/catalog/banner.png';
}


// Формируем аргументы запроса
$args = [
    'post_type'      => 'product',
    'posts_per_page' => 12,
    'meta_key'       => '_price',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
];

// Если передан параметр категории – добавляем tax_query
if ( $selected_cat ) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $selected_cat,
        ],
    ];
}

$query = new WP_Query( $args );
?>
    <main class="main">
      <div class="container">
        <section class="breadcrumbs">
          <a href="/" class="breadcrumbs__link">
            <img src="/wp-content/themes/dvernoyton/assets/images/svg/home.svg" alt="" />
          </a>
          <span class="breadcrumbs__sep">/</span>
          <a href="/catalog<?echo $selected_cat?>" class="breadcrumbs__link"
            ><?echo $current_cat_name?></a
          >
        </section>
      </div>
      <section class="catalog-banner">
        <div class="container">
          <div class="catalog-banner__banner">
            <h1 class="catalog-banner__title">
              <?echo $current_cat_name?>
            </h1>
            <picture class="catalog-banner__image image-wrapper">
              <img
                src="<?echo $thumbnail_url?>"
                alt=""
                class="image-wrapper__image"
              />
            </picture>
          </div>
        </div>
      </section>
      <section class="catalog">
        <div class="container catalog__container">
          <div class="catalog__filters">
            <button class="catalog__filter-button">Фильтры</button>
            <div class="catalog__filters-list">
            <?php
              // Задаём желаемый порядок атрибутов с их отображаемыми названиями:
              $ordered_attributes = array(
                'tip_polotna'         => 'Тип полотна',
                'tip_otkryvaniya'     => 'Тип открывания',
                'kolvo_stvorok'       => 'Кол-во створок',
                'cvet'                => 'Цвет',
                'razmer'              => 'Размер',
                'dopolnitelnie_opcii' => 'Дополнительные опции'
              );

              // Если передан параметр для ограничения по товарам из категории – этот код можно добавить как и раньше:
              $current_cat_id = false;
              if ( isset($_GET['cat']) && ! empty($_GET['cat']) ) {
                  $current_cat = get_term_by('slug', sanitize_text_field($_GET['cat']), 'product_cat');
                  if ( $current_cat && ! is_wp_error($current_cat) ) {
                      $current_cat_id = $current_cat->term_id;
                  }
              }

              $products_in_cat = array();
              if ( $current_cat_id ) {
                  $products_in_cat = get_posts( array(
                      'post_type'      => 'product',
                      'posts_per_page' => -1,
                      'tax_query'      => array(
                          array(
                              'taxonomy' => 'product_cat',
                              'field'    => 'term_id',
                              'terms'    => $current_cat_id,
                          ),
                      ),
                      'fields'         => 'ids'
                  ) );
              }

            // Выводим фильтры согласно заданному порядку:
            foreach( $ordered_attributes as $attr_slug => $attr_label ) {
                // Формируем название таксономии, например, "pa_seria"
                $taxonomy = 'pa_' . $attr_slug;
                
                // Получаем термины для данного атрибута; если задана категория, ограничиваем выборку товарами из неё
                if ( ! empty( $products_in_cat ) ) {
                    $terms = get_terms( array(
                        'taxonomy'   => $taxonomy,
                        'hide_empty' => true,
                        'object_ids' => $products_in_cat,
                    ) );
                } else {
                    $terms = get_terms( array(
                        'taxonomy'   => $taxonomy,
                        'hide_empty' => false,
                    ) );
                }

                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    echo '<div class="catalog__filter">';
                    echo '<p class="catalog__filter-name">' . esc_html( $attr_label ) . '</p>';
                    
                    foreach ( $terms as $term ) {
                        $input_id = esc_attr( $taxonomy . '_' . $term->slug );
                        $term_name = $term->name;
                        // Если в названии встречается точка с запятой, оставляем только первую часть и добавляем стоимость
                        if ( strpos( $term_name, ';' ) !== false ) {
                            $parts = explode( ';', $term_name );
                            $term_name = trim( $parts[0] );
                            $term_name .= ' (' . trim( $parts[1] ) . 'р.)';
                        }
                        ?>
                        <label for="<?php echo $input_id; ?>" class="catalog__filter-label">
                          <input type="checkbox" id="<?php echo $input_id; ?>" class="catalog__filter-input" value="<?php echo esc_attr( $term->slug ); ?>">
                          <span class="catalog__filter-text"><?php echo esc_html( $term_name ); ?></span>
                        </label>
                        <?php
                    }
                    echo '</div>';
                  }
              }
              ?>


              <!-- Фильтр "Наличие" (выводим вручную) -->
              <div class="catalog__filter">
                <p class="catalog__filter-name">Наличие</p>
                <label for="nalichie1" class="catalog__filter-label">
                  <input type="checkbox" id="nalichie1" class="catalog__filter-input" value="instock">
                  <span class="catalog__filter-text">В наличии</span>
                </label>
                <label for="nalichie2" class="catalog__filter-label">
                  <input type="checkbox" id="nalichie2" class="catalog__filter-input" value="outofstock">
                  <span class="catalog__filter-text">Под заказ (срок уточняйте у менеджера)</span>
                </label>
              </div>

              <button type="button" class="catalog__filters-button solid-button">Поиск</button>
            </div>

          </div>

          <div class="catalog__items">
          <?php
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();
                    // Явно получаем объект товара
                    $product = wc_get_product( get_the_ID() );
                    
                    // Инициализируем URL изображения
                    $img_url = '';

                    // Получаем галерею изображений товара
                    $gallery = $product->get_gallery_image_ids();

                    // Сначала проверяем главное изображение (Featured Image)
                    if ( has_post_thumbnail() ) {
                      $img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                    }
                    // Если нет главного изображения, проверяем галерею
                    elseif ( ! empty( $gallery = $product->get_gallery_image_ids() ) ) {
                      $img_url = wp_get_attachment_image_url( $gallery[0], 'full' );
                    }
                    // Если и того нет, используем плейсхолдер
                    else {
                      $img_url = wc_placeholder_img_src();
                    }
            ?>
                    <article class="catalog__item catalog-item" data-aos="fade-up">
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
                            <p class="catalog-item__spec"><?php echo $product->is_in_stock() ? 'В наличии' : 'Под заказ'; ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="catalog-item__link solid-button">Подробнее</a>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="catalog__placeholder">Товары не найдены.</p>';
            endif;
            ?>
          </div>
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
    <? get_footer(); ?>
