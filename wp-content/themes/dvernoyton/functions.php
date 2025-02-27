<?php
show_admin_bar(false);
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) );
function add_assets() {
  wp_enqueue_style( 'inttelcss', "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css");
  wp_enqueue_style( 'fancyboxcss', "https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css");
  wp_enqueue_script( 'intlteljs', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js', array(), null, true);
  wp_enqueue_script( 'fancyboxjs', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), null, true);
  wp_enqueue_script( 'imaskjs', 'https://unpkg.com/imask', array(), null, true);
  wp_enqueue_script( 'aosjs', get_template_directory_uri(  ) . '/assets/lib/aos/aos.js', array(), null, true);
  wp_enqueue_script( 'accordionjs', get_template_directory_uri(  ) . '/assets/js/accordion.js', array(), null, true);
  wp_enqueue_script( 'phoneprefixerjs', get_template_directory_uri(  ) . '/assets/js/phonePrefixer.js', array(), null, true);
  wp_enqueue_script( 'headerjs', get_template_directory_uri(  ) . '/assets/js/header.js', array(), null, true);
  wp_enqueue_style( 'aoscss', get_template_directory_uri(  ) . '/assets/lib/aos/aos.css');
  wp_enqueue_script( 'aosinitjs', get_template_directory_uri(  ) . '/assets/js/aos.js', array(), null, true);
  wp_enqueue_style( 'stylecss', get_template_directory_uri(  ) . '/assets/scss/style.css');
  if(is_page_template( 'index.php' )) {
    wp_enqueue_script( 'numbersjs', get_template_directory_uri(  ) . '/assets/js/index/numberAnimation.js', array(), null, true);
    wp_enqueue_style( 'swipercss', get_template_directory_uri(  ) . '/assets/lib/swiper/swiper.css');
    wp_enqueue_script( 'swiperjs', get_template_directory_uri(  ) . '/assets/lib/swiper/swiper.js', array(), null, true);
    wp_enqueue_script( 'swiperinitjs', get_template_directory_uri(  ) . '/assets/js/index/swiper.js', array(), null, true);
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/index/style.css');
    return;
  }
  if(is_page_template( 'about-us.php' )) {
    wp_enqueue_script( 'numbersjs', get_template_directory_uri(  ) . '/assets/js/index/numberAnimation.js', array(), null, true);
    wp_enqueue_script( 'fancyinitjs', get_template_directory_uri(  ) . '/assets/js/product/photo-view.js', array(), null, true);
    wp_enqueue_script( 'morejs', get_template_directory_uri(  ) . '/assets/js/about/more.js', array(), null, true);
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/about-us/style.css');
    return;
  }
  if(is_page_template( 'catalog.php' )) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/catalog/style.css');
    wp_enqueue_script( 'filterbuttonjs', get_template_directory_uri(  ) . '/assets/js/catalog/filterButton.js', array(), null, true);
    wp_enqueue_script( 'paginationjs', get_template_directory_uri(  ) . '/assets/js/catalog/pagination.js', array(), null, true);
    wp_localize_script( 
      'filterbuttonjs', 
      'myAjax', 
      array(
          'ajax_url' => admin_url( 'admin-ajax.php' )
      ) 
    );
    
    return;
  }
  if(is_page_template( 'contacts.php' )) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/contacts/style.css');
    wp_enqueue_script( 'yandexjs', "https://api-maps.yandex.ru/2.1/?lang=ru_RU", array(), null, true);
    wp_enqueue_script( 'mapjs', get_template_directory_uri(  ) . '/assets/js/map.js', array(), null, true);
    return;
  }
  if(is_page_template( 'dealers.php' )) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/dealers/style.css');
    return;
  }
  if(is_page_template( 'privacy.php' )) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/privacy/style.css');
    return;
  }
  if ( is_singular( 'product' ) ) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri() . '/assets/scss/product/style.css' );
    wp_enqueue_script( 'fancyinitjs', get_template_directory_uri() . '/assets/js/product/photo-view.js', array(), null, true );
    wp_enqueue_script( 'priceparserjs', get_template_directory_uri() . '/assets/js/product/price-parser.js', array(), null, true );
    return;
  }

  if ( is_singular( 'projects' ) ) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri() . '/assets/scss/single-project/style.css' );
    return;
  }

  if(is_page_template( 'projects.php' )) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/projects/style.css');
    wp_enqueue_script( 'yandexjs', "https://api-maps.yandex.ru/2.1/?lang=ru_RU", array(), null, true);
    wp_enqueue_script( 'mapjs', get_template_directory_uri(  ) . '/assets/js/projects/map.js', array(), null, true);
    return;
  }

  if(is_page_template( 'quarters.php' )) {
    wp_enqueue_style( 'pagestyle.css', get_template_directory_uri(  ) . '/assets/scss/quarters/style.css');
    wp_enqueue_script( 'fancyinitjs', get_template_directory_uri(  ) . '/assets/js/product/photo-view.js', array(), null, true);
    return;
  }



}

add_action('wp_enqueue_scripts', 'add_assets');

function get_quarters() {
  $args = array(
    'post_type' => 'quarter',
    'posts_per_page' => -1, // Получаем все проекты
  );

  $query = new WP_Query($args);
  $quarters = array();

  if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post(); 

        // Получаем стандартные данные поста
        $quarter = array(
            'id' => get_the_ID(),
            'title' => get_the_title()
        );

        // Добавляем кастомные поля ACF
        $quarter['text'] = get_field('quarter_text'); // Пример поля
        // Добавляем изображение
        $quarter['image'] = wp_get_attachment_image_url(get_field('quarter_image'), 'large'); // Пример поля
        $quarter['imageAlt'] = get_post_meta(get_field('quarter_image'), '_wp_attachment_image_alt', TRUE); // Пример поля
        $quarter['imageTitle'] = get_the_title(get_field('quarter_image')); // Пример поля

        // Добавляем проект в массив
        $quarters[] = $quarter;
    }
    wp_reset_postdata();
  }

  return $quarters;
}

function get_projects( $arg = -1 ) {
  // Если параметр является объектом WP_REST_Request, то извлекаем из него значение 'num'
  if ( $arg instanceof WP_REST_Request ) {
      $num = $arg->get_param('num');
      $num = empty( $num ) ? -1 : intval( $num );
  } else {
      // Иначе предполагаем, что передано число
      $num = intval( $arg );
  }

  // Подготавливаем аргументы запроса
  $args = array(
      'post_type'      => 'projects',
      'posts_per_page' => $num,
  );

  $query = new WP_Query( $args );
  $projects = array();
  $allActivities = array(); // Для хранения всех уникальных терминов

  if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
          $query->the_post();

          // Стандартные данные поста
          $project = array(
              'id'    => get_the_ID(),
              'title' => get_the_title(),
              'link'  => get_permalink(), // Добавляем ссылку на проект
          );

          // Добавляем кастомные поля (например, ACF)
          $project['place']  = get_field('project_place'); 
          $project['region'] = get_field('project_region'); 

          // Получаем термины таксономии 'partners'
          $terms = get_the_terms( get_the_ID(), 'partners' );
          if ( $terms && ! is_wp_error( $terms ) ) {
              $project['partners'] = array();
              foreach ( $terms as $term ) {
                  if ( ! in_array( $term->slug, $allActivities ) ) {
                      $allActivities[] = $term->slug;
                  }
                  $project['partners'][] = $term->slug;
              }
          } else {
              $project['partners'] = array();
          }

          // Добавляем изображение
          $project['image']      = wp_get_attachment_image_url( get_field('project_image'), 'large' );
          $project['imageAlt']   = get_post_meta( get_field('project_image'), '_wp_attachment_image_alt', true );
          $project['imageTitle'] = get_the_title( get_field('project_image') );

          $projects[] = $project;
      }
      wp_reset_postdata();
  }

  return array(
      'projects'    => $projects,
      'allPartners' => $allActivities
  );
}

// Регистрация REST API маршрута
add_action('rest_api_init', function() {
  register_rest_route('custom/v1', '/projects', array(
      'methods'  => 'GET',
      'callback' => 'get_projects',
  ));
});


function get_project_info( $project_id ) {
  // Получаем заголовок проекта
  $project = array();
  $project['title'] = get_the_title( $project_id );
  
  // Получаем поля проекта (при условии, что они заданы через ACF)
  $project['project_object']  = get_field( 'project_object', $project_id );
  $project['project_address'] = get_field( 'project_address', $project_id );
  $project['project_time']    = get_field( 'project_time', $project_id );
  $project['project_main_image']    = get_field( 'project_image', $project_id );
  
  // Получаем повторитель "project_doors"
  $project['project_doors'] = array();
  if ( have_rows( 'project_doors', $project_id ) ) {
      while ( have_rows( 'project_doors', $project_id ) ) {
          the_row();
          $door = array();
          // Получаем ID изображения и имя двери
          $door['project_doors_image'] = get_sub_field( 'project_doors_image' ); // ожидается ID
          $door['project_doors_name']  = get_sub_field( 'project_doors_name' );
          $project['project_doors'][]   = $door;
      }
      // Важно: после цикла have_rows() сбрасываем глобальное состояние, если требуется
      // wp_reset_rows(); // (эта функция не обязательна, если дальше нет повторителей)
  }
  
  return $project;
}




function get_callback_form(){
  ?>
        <section id="form" class="callback-form">
        <div class="container callback-form__container">
          <form action="" class="callback-form__form">
            <p class="callback-form__title callback-form__title--mobile">
              оставьте данные <span>и мы снизим цену на 3%</span>
            </p>
            <div class="callback-form__form">
              <div class="callback-form__input-wrapper">
                <label for="name" class="callback-form__label"
                  >Название компании</label
                >
                <input
                  type="text"
                  placeholder="ООО Дверной Тон"
                  id="name"
                  class="callback-form__input"
                />
              </div>
              <div class="callback-form__input-wrapper">
                <label for="phone" class="callback-form__label"
                  >Контактный телефон</label
                >
                <input
                  type="text"
                  id="phone"
                  placeholder="+7 (999) 999-99-99"
                  class="callback-form__input"
                />
              </div>
              <div class="callback-form__input-wrapper">
                <label for="email" class="callback-form__label">Email</label>
                <input
                  type="email"
                  placeholder="info@dvernoyton.com"
                  id="email"
                  class="callback-form__input"
                />
              </div>
              <div class="callback-form__lower">
                <label for="policy" class="callback-form__policy">
                  <input type="checkbox" id="policy" />
                  Я согласен на обработку персональных данных и согласен с
                  условиями <a href="/privacy">политики конфиденциальности</a> и
                  политики обработки данных
                </label>
                <button class="solid-button callback-form__button">
                  Отправить!
                </button>
              </div>
            </div>
          </form>
          <div class="callback-form__contacts">
            <p class="callback-form__title">
              оставьте данные <span>и мы снизим цену на 3%</span>
            </p>
            <p class="callback-form__subtitle">или позвоните нам</p>
            <a href="tel:+7 (495) 647-97-78" class="callback-form__contact">
              <img
                src="/wp-content/themes/dvernoyton/assets/images/svg/phone.svg"
                class="callback-form__contact-image"
              />
              +7 (495) 647-97-78
            </a>
            <a href="mailto:info@dvernoyton.com" class="callback-form__contact">
              <img
                src="/wp-content/themes/dvernoyton/assets/images/svg/email.svg"
                class="callback-form__contact-image"
              />
              info@dvernoyton.com
            </a>
          </div>
        </div>
      </section>
  <?
}


function filter_products_callback() {
  // Получаем и декодируем фильтры, переданные через POST (ожидается JSON-строка)
  $filters = [];
  if ( isset( $_POST['filters'] ) ) {
      $filters = json_decode( wp_unslash( $_POST['filters'] ), true );
  }
  
  // Получаем номер страницы, если передан. Если нет, устанавливаем 1
  $page = isset( $_POST['page'] ) ? intval( $_POST['page'] ) : 1;
  
  // Базовые аргументы запроса
  $args = [
      'post_type'      => 'product',
      'posts_per_page' => 12,  // для каждой страницы будет 12 товаров
      'paged'          => $page,
      'orderby'        => 'date',
      'order'          => 'DESC',
  ];
  
  $tax_query = [];
  $meta_query = [];
  
  // 1. Фильтр "Серия" – атрибут, таксономия pa_seria
  if ( ! empty( $filters['серия'] ) ) {
      $tax_query[] = [
          'taxonomy' => 'pa_seria',
          'field'    => 'slug',
          'terms'    => $filters['серия'],
          'operator' => 'IN',
      ];
  }
  
  // 2. Фильтр "Тип полотна" – атрибут, таксономия pa_tip_polotna
  if ( ! empty( $filters['тип полотна'] ) ) {
      $tax_query[] = [
          'taxonomy' => 'pa_tip_polotna',
          'field'    => 'slug',
          'terms'    => $filters['тип полотна'],
          'operator' => 'IN',
      ];
  }
  
  // 3. Фильтр "Тип открывания" – атрибут, таксономия pa_tip_otkryvaniya
  if ( ! empty( $filters['тип открывания'] ) ) {
      $tax_query[] = [
          'taxonomy' => 'pa_tip_otkryvaniya',
          'field'    => 'slug',
          'terms'    => $filters['тип открывания'],
          'operator' => 'IN',
      ];
  }
  
  // 4. Фильтр "Кол-во створок" – атрибут, таксономия pa_kolvo_stvorok
  if ( ! empty( $filters['кол-во створок'] ) ) {
      $tax_query[] = [
          'taxonomy' => 'pa_kolvo_stvorok',
          'field'    => 'slug',
          'terms'    => $filters['кол-во створок'],
          'operator' => 'IN',
      ];
  }
  
  // 5. Фильтр "Цвет" – атрибут, таксономия pa_cvet
  if ( ! empty( $filters['цвет'] ) ) {
      $tax_query[] = [
          'taxonomy' => 'pa_cvet',
          'field'    => 'slug',
          'terms'    => $filters['цвет'],
          'operator' => 'IN',
      ];
  }
  
  // 6. Фильтр "Размер" – атрибут, таксономия pa_razmer
  if ( ! empty( $filters['размер'] ) ) {
      $tax_query[] = [
          'taxonomy' => 'pa_razmer',
          'field'    => 'slug',
          'terms'    => $filters['размер'],
          'operator' => 'IN',
      ];
  }

  // Обработка выбранной категории (если передан параметр "категория")
  if ( ! empty( $filters['категория'] ) ) {
    // Предполагаем, что в filters['категория'] передаётся slug категории
    $tax_query[] = [
        'taxonomy' => 'product_cat',
        'field'    => 'slug',
        'terms'    => $filters['категория'],
        'operator' => 'IN',
    ];
  }
  
  // 7. Фильтр "Дополнительные опции" – атрибут, таксономия pa_dopolnitelnie_opcii
  if ( ! empty( $filters['дополнительные опции'] ) ) {
      $tax_query[] = [
          'taxonomy' => 'pa_dopolnitelnie_opcii',
          'field'    => 'slug',
          'terms'    => $filters['дополнительные опции'],
          'operator' => 'IN',
      ];
  }
  
  // 8. Фильтр "Наличие" – берём из метаполя _stock_status
  if ( ! empty( $filters['наличие'] ) ) {
      $stock_values = [];
      foreach ( $filters['наличие'] as $val ) {
          if ( 'nalichie1' === $val ) { // "В наличии"
              $stock_values[] = 'instock';
          } elseif ( 'nalichie2' === $val ) { // "Под заказ"
              $stock_values[] = 'outofstock';
          }
      }
      if ( ! empty( $stock_values ) ) {
          $meta_query[] = [
              'key'     => '_stock_status',
              'value'   => $stock_values,
              'compare' => 'IN',
          ];
      }
  }
  
  // Если есть условия по атрибутам – добавляем tax_query
  if ( ! empty( $tax_query ) ) {
      $args['tax_query'] = $tax_query;
  }
  // Если есть условия по метаполям – добавляем meta_query
  if ( ! empty( $meta_query ) ) {
      $args['meta_query'] = $meta_query;
  }
  
  // Выполняем запрос
  $query = new WP_Query( $args );
  
  ob_start();
  
  if ( $query->have_posts() ) :
      while ( $query->have_posts() ) : $query->the_post();
          $product = wc_get_product( get_the_ID() );
          // Получаем изображение товара (галерея → Featured Image → плейсхолдер)
          $img_url = '';
          $gallery = $product->get_gallery_image_ids();
          if ( ! empty( $gallery ) ) {
              $img_url = wp_get_attachment_image_url( $gallery[0], 'full' );
          } elseif ( has_post_thumbnail() ) {
              $img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          } else {
              $img_url = wc_placeholder_img_src();
          }
          ?>
          <article class="catalog__item catalog-item">
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
      if($page === 1) {
        echo '<p class="catalog__placeholder">Товары не найдены.</p>';
      }
  endif;
  
  $html = ob_get_clean();
  echo $html;
  wp_die();
}
add_action( 'wp_ajax_filter_products', 'filter_products_callback' );
add_action( 'wp_ajax_nopriv_filter_products', 'filter_products_callback' );
