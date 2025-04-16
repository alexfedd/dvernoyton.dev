<?

// Template Name: Страница чертежей



get_header();

$quarters = get_quarters();

?>

    <main class="main">

      <section class="quarters">

        <div class="container">
          <h1 style="display: none;">Чертежи</h1>

          <?php foreach ($quarters as $quarter) : ?>

            <article class="quarters__item">

              <picture

                class="image-wrapper quarters__item-image"

                data-fancybox

                data-src="<?echo $quarter['image']?>"

                data-aos="fade-up"

              >

                <img

                  src="<?echo $quarter['image']?>"

                  alt="<?echo $quarter['imageAlt']?>"

                  title="<?echo $quarter['imageTitle']?>"

                  class="image-wrapper__image"

                />

              </picture>

              <div

                class="quarters__item-content"

                data-aos="fade-up"

                data-aos-delay="500"

              >

                <h2 class="quarters__item-title">

                  <?echo $quarter['title']?>

                </h2>

                <p class="quarters__item-text">

                  <?echo $quarter['text']?>

                </p>

              </div>

            </article>

          <? endforeach; ?>

        </div>

      </section>

    </main>

    <? get_footer(); ?>