<?php 
// Template name: Страница галереи

get_header();
?>
<section class="gallery">
  <div class="container gallery__container">
    <?php 
      // Получаем массив ID изображений из ACF-поля "gallery_photos" для текущего поста
      $gallery_ids = get_field('gallery_photos', get_the_ID());
      if ( $gallery_ids ) :
        foreach ( $gallery_ids as $image_id ) :
          // Получаем URL изображения нужного размера и полный URL
          $img_url = wp_get_attachment_image_url( $image_id, 'large' );
          $full_img_url = wp_get_attachment_url( $image_id );
          // Получаем alt текст
          $img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
    ?>
          <picture data-src="<?php echo esc_url( $full_img_url ); ?>" data-fancybox="gallery" class="gallery__item image-wrapper">
            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" class="image-wrapper__image" draggable="false" />
          </picture>
    <?php 
        endforeach;
      endif;
    ?>
  </div>
</section>



<?php
get_footer()
?>