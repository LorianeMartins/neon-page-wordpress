<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.min.css" />


    <!-- Primary Meta Tags -->
    <title><?php bloginfo('name')?> <?php wp_title('-')?></title>
    <meta name="title" content="Redesign da Página do Banco Neon">
    <meta name="description" content="A conta digital certa pra cuidar bem do seu dinheiro.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://loriprojects-neon.netlify.app/">
    <meta property="og:title" content="Redesign da Página do Banco Neon">
    <meta property="og:description" content="A conta digital certa pra cuidar bem do seu dinheiro.">
    <meta property="og:image" content="https://loriprojects-neon.netlify.app/share-img.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://loriprojects-neon.netlify.app/">
    <meta property="twitter:title" content="Redesign da Página do Banco Neon">
    <meta property="twitter:description" content="A conta digital certa pra cuidar bem do seu dinheiro.">
    <meta property="twitter:image" content="https://loriprojects-neon.netlify.app/share-img.jpg">

    <?php wp_head() ?>

  </head>
  
  <body>
    <header>
      <div class="container">
        <a href="" class="logo">
          <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" alt="Logo Neon" />
        </a>
        <nav>
          <?php
            $args = array(
              'menu' => 'Header Principal',
              'theme_location' => 'header-principal',
              'container' => false
            );
            wp_nav_menu( $args );
          ?>
          <button class="btn-secundary white">Abra sua conta digital</button>
          <button class="btn-mobile">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/btn-mobile.svg" alt="" />
          </button>
        </nav>
      </div>
    </header>
