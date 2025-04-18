<?php
// Post Type: post
// Template Name: Статья блога
get_header(); ?>
<main class="main">
  <section class="blog-article">

    <!-- Баннер -->
    <div class="container blog-article__banner">
      <div class="blog-article__info">
        <h1 class="blog-article__title"><?php the_title() ?></h1>
        <p class="blog-article__subtitle">
          <?= esc_html( get_field('blog_subtitle') ) ?>
        </p>
      </div>
      <?php
      $banner_id = get_field('blog_banner');
      if ($banner_id): ?>
        <picture class="image-wrapper blog-article__banner-image">
          <?= wp_get_attachment_image($banner_id, 'full', false, ['class'=>'image-wrapper__image']) ?>
        </picture>
      <?php endif; ?>
    </div>

    <!-- Контент -->
    <div class="container blog-article__content">
      <div class="blog-article__left">
        <?php if (get_field('blog_left_text')): ?>
          <p class="blog-article__text"><?= wp_kses_post( get_field('blog_left_text') ) ?></p>
        <?php endif; ?>
        <?php
        $img = get_field('blog_image');
        if ($img): ?>
          <picture class="image-wrapper blog-article__image">
            <?= wp_get_attachment_image($img, 'full', false, ['class'=>'image-wrapper__image']) ?>
          </picture>
        <?php endif; ?>
      </div>
      <div class="blog-article__right">
        <?php if (get_field('blog_right_text')): ?>
          <p class="blog-article__text"><?= wp_kses_post( get_field('blog_right_text') ) ?></p>
        <?php endif; ?>
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>
