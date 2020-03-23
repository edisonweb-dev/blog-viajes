<?php get_header();
?>

<section class="container contenido">
    <div class="row">

      <?php if(is_page('contacto') ): ?>

        <div class="col-sm-8 col-sm-offset-2 pagina-full-width">
            <?php
              while(have_posts()): the_post();
                the_content();
              endwhile;
            ?>
        </div>

      <?php else: ?>

        <div class="col-sm-12">
            <?php
              while(have_posts()): the_post();
                the_content();
              endwhile;
            ?>
        </div>
      <?php endif; ?>

    </div>
</section>

<?php get_footer();
