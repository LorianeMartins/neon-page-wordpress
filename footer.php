    <footer>
      <div class="container">
        <div class="top">
          <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" class="logo" alt="Logo" />
          <div class="share">
            <span><?php the_field('title_social_media', 'options')?></span>
            <ul>
              <?php if( have_rows('multiple_social_media', 'options') ): while ( have_rows('multiple_social_media', 'options') ) : the_row(); ?>
                <li>
                  <a href="<?php the_sub_field('link_social_media') ?>">
                    <img src="<?php the_sub_field('icon_social_media') ?>" alt="Ícone youtube" />
                  </a>
                </li>
              <?php endwhile; else : endif;?>
            </ul>
          </div>
        </div>
        <div class="main">
          <nav>
            <div class="item">
              <strong>Produtos Neon</strong>
              <?php
                $args = array(
                  'menu' => 'Menu Produtos Footer',
                  'theme_location' => 'products-menu-footer',
                  'container' => false
                );
                wp_nav_menu( $args );
              ?>
            </div>
            <div class="item">
              <strong>Conta digital PJ</strong>
              <?php
                $args = array(
                  'menu' => 'Menu Conta Digital Footer',
                  'theme_location' => 'account-menu-footer',
                  'container' => false
                );
                wp_nav_menu( $args );
              ?>
            </div>
            <div class="item">
              <strong>Blog</strong>
              <?php
                $args = array(
                  'menu' => 'Menu Blog Footer',
                  'theme_location' => 'blog-menu-footer',
                  'container' => false
                );
                wp_nav_menu( $args );
              ?>
            </div>
            <div class="item">
              <strong>Institucional</strong>
              <?php
                $args = array(
                  'menu' => 'Menu Institucional Footer',
                  'theme_location' => 'institucional-menu-footer',
                  'container' => false
                );
                wp_nav_menu( $args );
              ?>
            </div>
            <div class="item">
              <strong>Ajuda</strong>
              <?php
                $args = array(
                  'menu' => 'Menu Ajuda Footer',
                  'theme_location' => 'help-menu-footer',
                  'container' => false
                );
                wp_nav_menu( $args );
              ?>
            </div>
          </nav>
          <div class="btns">
            <?php if( have_rows('add_contacts', 'options') ): while ( have_rows('add_contacts', 'options') ) : the_row(); ?>
              <button>
                <img src="<?php the_sub_field('icon_contact') ?>" alt="Ícone envelope" />
                <div class="info">
                  <strong><?php the_sub_field('title_contact') ?></strong>
                  <span><?php the_sub_field('description_contact') ?></span>
                </div>
              </button>
            <?php endwhile; else : endif;?>
          </div>
        </div>
        <div class="message">
          <div class="icon">😀</div>
            <?php the_field('message_text', 'options')?>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      var swiper = new Swiper(".slide-evidences", {
        slidesPerView: 3,
        spaceBetween: 32,
        pagination: {
          el: ".s-card-evidences .top .swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1.3,
            spaceBetween: 16,
          },
          600: {
            slidesPerView: 2.3,
            spaceBetween: 15,
          },
          850: {
            slidesPerView: 3,
            spaceBetween: 16,
          },
        },
      });

      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>

  <?php wp_footer() ?>
  </body>
</html>
