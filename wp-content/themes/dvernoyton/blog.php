<?php
// Template Name: Страница блога

get_header(); ?>
<main class="main">
  <section class="blog">
    <div class="blog__container container">

      <!-- Блок категорий -->
      <div class="blog__add-block">
        <div class="blog__categories">
          <h2 class="blog__categories-title">Категории</h2>
          <nav class="blog__categories-links">
            <?php
            // текущая выбранная категория из GET-параметра
            $current_cat = isset($_GET['cat']) ? intval($_GET['cat']) : 0;
            ?>
            <!-- «Все» -->
            <a href="<?= esc_url( home_url('/blog/?cat=0') ) ?>"
              class="blog__categories-link <?= $current_cat === 0 ? 'blog__categories-link--active' : '' ?>">
              Все
            </a>

            <?php
            $cats = get_categories([
              'taxonomy'   => 'category',
              'hide_empty' => true,
            ]);
            foreach ($cats as $cat): ?>
              <a href="<?= esc_url( home_url("/blog/?cat={$cat->term_id}") ) ?>"
                class="blog__categories-link <?= $current_cat === (int)$cat->term_id ? 'blog__categories-link--active' : '' ?>">
                <?= esc_html($cat->name) ?>
              </a>
            <?php endforeach; ?>
          </nav>
        </div>


        <!-- 3 последних поста -->
        <div class="blog__lasts">
          <h2 class="blog__lasts-title">Последние посты</h2>
          <div class="blog__lasts-items">
            <?php
            $last = new WP_Query([
              'posts_per_page' => 3,
              'post_type'      => 'post',
            ]);
            while ($last->have_posts()): $last->the_post();
              $banner_id = get_field('blog_banner');
              $cats     = get_the_category();
              $first_cat= $cats ? $cats[0]->name : '';
              ?>
              <a href="<?php the_permalink() ?>" class="blog__lasts-item">
                <?php if ($banner_id): ?>
                  <picture class="image-wrapper blog__lasts-item-image">
                    <?= wp_get_attachment_image($banner_id, 'medium', false, ['class'=>'image-wrapper__image']) ?>
                  </picture>
                <?php endif; ?>
                <p class="blog__item-lasts-info">
                  <?= get_the_date('d F Y') ?>, <?= esc_html($first_cat) ?>
                </p>
                <h2 class="blog__item-lasts-title"><?php the_title() ?></h2>
              </a>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>

      <!-- Основной цикл -->
      <div class="blog__items">
        <?php if (have_posts()): while (have_posts()): the_post();
          $banner_id = get_field('blog_banner');
          $cats      = get_the_category();
          $first_cat = $cats ? $cats[0]->name : '';
          ?>
          <a href="<?php the_permalink() ?>" class="blog__item">
            <?php if ($banner_id): ?>
              <picture class="image-wrapper blog__item-image">
                <?= wp_get_attachment_image($banner_id, 'medium', false, ['class'=>'image-wrapper__image']) ?>
              </picture>
            <?php endif; ?>
            <p class="blog__item-info">
              <?= get_the_date('d F Y') ?>, <?= esc_html($first_cat) ?>
            </p>
            <h2 class="blog__item-title"><?php the_title() ?></h2>
            <p class="blog__item-text"><?= get_the_excerpt() ?></p>
            <span class="blog__item-link">Читать больше</span>
          </a>
        <?php endwhile; endif; ?>
      </div>

    </div>
  </section>
</main>
<?php get_footer(); ?>
