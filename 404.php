<?php 

    // Template name: Página não encontrada

?>

<div style="display: none;">
    <?php get_header(); ?>
</div>

    <section class="s-page-not-found">
        <div class="container">
            <img class="page-404" src="<?php echo get_template_directory_uri()?>/assets/img/not-found.svg" alt="">
            <h2>Opps!!!</h2>
            <h3>Essa página não foi encontrada.</h3>
            <a href="<?php echo get_home_url(); ?>" class="btn-secundary">Voltar para home</a
        </div>
    </section>
