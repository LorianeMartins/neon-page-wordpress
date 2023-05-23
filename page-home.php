<?php
    // Template name: Home
?>

<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="s-hero">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h3><?php the_field('subtitle_section_hero')?></h3>
        <h1><?php the_field('title_section_hero')?></h1>
        <button class="btn-primary"><?php the_field('button_text')?></button>
        <ul>
          <?php if( have_rows('items_section_hero') ): while ( have_rows('items_section_hero') ) : the_row(); ?>
            <li>
              <div class="icon">
                <img
                  src="<?php the_sub_field('icon_item') ?>"
                  alt="Ícone de cartão sem anuidade"
                />
              </div>
              <span><?php the_sub_field('text_item') ?></span>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
      </div>
      <div class="area-image">
        <h2 data-aos="fade-left"><?php the_field('title_section_hero_digital')?></h2>
        <div class="image" data-aos="zoom-in">
          <img
            class="card-front"
            src="<?php echo get_template_directory_uri()?>/assets/img/card-neon-frnt.png"
            alt="Card front"
          />
          <img
            class="card-back"
            src="<?php echo get_template_directory_uri()?>/assets/img/card-neon-back.png"
            alt="Card back"
          />
          <img
            class="circle"
            src="<?php echo get_template_directory_uri()?>/assets/img/circle-cards-neon.svg"
            alt="Circle cards"
          />
        </div>
      </div>
    </div>
  </section>

  <section class="s-card-neon">
    <div class="container">
      <div class="left-area">
        <div class="ilustra-mockup">
          <img
            src="<?php echo get_template_directory_uri()?>/assets/img/circle-mockup.svg"
            class="circle"
            alt="Círculo mockup"
            data-aos="fade-left"
          />
          <img
            src="<?php echo get_template_directory_uri()?>/assets/img/mockup.svg"
            class="mockup"
            alt="Mockup"
            data-aos="flip-right"
          />
        </div>
        <div class="text" data-aos="fade-up">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-neon.svg" alt="Ícone neon" />
          </div>
          <div class="info-text">
            <h3><?php the_field('title_download_app')?></h3>
            <p>
              <?php the_field('description_download_app')?>
            </p>
            <ul>
              <li>
                <a href="<?php the_field('description_apple_store')?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/apple-store.svg" alt="Apple store" />
                </a>
              </li>
              <li>
                <a href="<?php the_field('description_google_play')?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/google-play.svg" alt="Google play" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="right-area">
        <div class="main-text" data-aos="fade-left">
          <h2><?php the_field('text_app_neon')?></h2>
          <ul>
            <?php if( have_rows('items_app_neon') ): while ( have_rows('items_app_neon') ) : the_row(); ?>
              <li>
                <div class="info">
                  <img
                    src="<?php the_sub_field('icon_item') ?>"
                    class="icon"
                    alt=""
                  />
                  <div class="text">
                    <h3><?php the_sub_field('text_item') ?></h3>
                    <p>
                      <?php the_sub_field('description_item') ?>
                    </p>
                  </div>
                </div>
                <div class="arrow-wight">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/arrow-right.svg" alt="Arrow right" />
                </div>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
          <a class="btn" href=""><?php the_field('button_app_neon')?></a>
        </div>
        <div class="box-card" data-aos="fade-left">
          <div class="text">
            <h2><?php the_field('title_pj')?></h2>
            <h3><?php the_field('subtitle_pj')?></h3>
            <p>
              <?php the_field('description_pj')?>
            </p>
            <div class="btns">
              <button class="btn-primary"><?php the_field('title_button_mei')?></button>
              <button class="btn-primary"><?php the_field('title_button_me')?></button>
            </div>
          </div>
          <img
            src="<?php echo get_template_directory_uri()?>/assets/img/card-front-pj.svg"
            class="image"
            alt="Card pj"
          />
        </div>
      </div>
    </div>
  </section>

  <section class="s-card-evidences">
    <div class="container">
      <div class="top" data-aos="fade-right">
        <h2>
          <span><?php the_field('title_primary')?></span><?php the_field('title_secondary')?>
          😊
        </h2>
        <div class="swiper-pagination"></div>
      </div>

      <div class="swiper slide-evidences" data-aos="fade-up">
        <div class="swiper-wrapper">
          <?php if( have_rows('evidences') ): while ( have_rows('evidences') ) : the_row(); ?>
            <div class="swiper-slide">
              <div class="card-brief">
                <div class="user">
                  <strong><?php the_sub_field('user_evidence') ?></strong>
                  <img
                    src="<?php echo get_template_directory_uri()?>/assets/img/icon-twiiter.svg"
                    alt="Ícone twiiter"
                  />
                </div>
                <p>
                  <?php the_sub_field('text_evidence') ?>
                </p>
              </div>
            </div>
          <?php endwhile; else : endif;?>
        </div>
      </div>
    </div>
  </section>

  <section class="s-digital-account">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h2>
          <span>Aproveite</span>Domine o seu dinheiro com uma conta 100%
          digital
        </h2>
        <ul>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-cartao-internacional.svg"
                alt="Ícone cartão internacional"
              />
            </div>
            <div class="info">
              <h4>Cartão visa internacional</h4>
              <p>Tenha facilidades e benefícios para o seu dia a dia.</p>
            </div>
          </li>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-taxa-zero.svg"
                alt="Ícone taxa zero"
              />
            </div>
            <div class="info">
              <h4>Zero mensalidade e anuidade</h4>
              <p>Não gaste grana pagando taxas desnecessárias.</p>
            </div>
          </li>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-poupanca.svg"
                alt="Ícone de poupança"
              />
            </div>
            <div class="info">
              <h4>Investimento que rende mais que a poupança</h4>
              <p>Invista o seu dinheiro de maneira mais rentável.</p>
            </div>
          </li>
        </ul>
        <button class="btn-primary">Ative sua conta digital</button>
      </div>
      <div class="images">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/mockup-01.svg" class="mockup-01" alt=""
        data-aos="fade-up" / > 
        <img src="<?php echo get_template_directory_uri()?>/assets/img/mockup-02.png"
        class="mockup-02" alt="" data-aos="fade-down" / >
        <img
          src="<?php echo get_template_directory_uri()?>/assets/img/circle-conta-digital.svg"
          class="circle"
          alt=""
          data-aos="zoom-in"
        />
      </div>
    </div>
  </section>

  <?php endwhile; else: endif; ?>

<?php get_footer(); ?>
