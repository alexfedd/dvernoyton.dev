<?php 
// Template Name: Посадочная проекта
// Post Type Name: projects
get_header();

// Получаем ID текущего проекта
$project_id = get_the_ID();

// Предполагаем, что функция get_project_info() уже определена и возвращает массив с данными проекта
$project = get_project_info( $project_id );

// Получаем featured image как резерв, если основной проектный снимок не задан в ACF
$project_main_img = get_the_post_thumbnail_url( $project_id, 'large' );
?>
<main class="main">
  <section class="project-banner">
    <div class="container project-banner__container">
      <picture class="image-wrapper project-banner__image">
        <?php if ( $project_main_img ) : ?>
          <img src="<?php echo esc_url( $project_main_img ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?>" class="image-wrapper__image" draggable="false" />
        <?php else: ?>
          <img src="<?php echo wc_placeholder_img_src(); ?>" alt="Нет изображения" class="image-wrapper__image" draggable="false" />
        <?php endif; ?>
      </picture>
      <div class="project-banner__content">
        <h1 class="project-banner__title"><?php echo esc_html( $project['title'] ); ?></h1>
        <div class="project-banner__row">
          <div class="project-banner__column">Объект:</div>
          <div class="project-banner__column">
            <?php echo ! empty( $project['project_object'] ) ? esc_html( $project['project_object'] ) : '—'; ?>
          </div>
        </div>
        <div class="project-banner__row">
          <div class="project-banner__column">Адрес:</div>
          <div class="project-banner__column">
            <?php echo ! empty( $project['project_address'] ) ? esc_html( $project['project_address'] ) : '—'; ?>
          </div>
        </div>
        <div class="project-banner__row">
          <div class="project-banner__column">Срок поставки:</div>
          <div class="project-banner__column">
            <?php echo ! empty( $project['project_time'] ) ? esc_html( $project['project_time'] ) : '—'; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php if ( ! empty( $project['project_doors'] ) && is_array( $project['project_doors'] ) ) : ?>
  <section class="project-doors">
    <div class="container project-doors__container">
        <?php foreach ( $project['project_doors'] as $door ) : 
          // Получаем URL изображения двери по ID, если задано
          $door_img_url = $door['project_doors_image'] ? wp_get_attachment_image_url( $door['project_doors_image'], 'large' ) : wc_placeholder_img_src();
        ?>
          <div class="project-doors__item">
            <picture data-fancybox="gallery" data-src="<?php echo esc_url( $door_img_url ); ?>" class="image-wrapper project-doors__item-image">
              <img src="<?php echo esc_url( $door_img_url ); ?>" alt="<?php echo esc_attr( $door['project_doors_name'] ); ?>" class="image-wrapper__image" draggable="false" />
            </picture>
            <h2 class="project-doors__item-title">
              <?php echo esc_html( $door['project_doors_name'] ); ?>
            </h2>
          </div>
        <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
