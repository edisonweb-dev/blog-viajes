<?php
/*
* Template Name: Pagina con Sidebar
*/
get_header();
?>

<section class="container contenido">
    <div class="row">
      <?php
        while(have_posts()): the_post();
        ?>
            <div class="col-sm-8 contenido-pagina">
              <?php the_content(); ?>
            </div>

      <?php  endwhile; ?>

            <div class="col-sm-4">
               <?php get_sidebar(); ?>
            </div>
    </div>
</section>

<?php get_footer();
