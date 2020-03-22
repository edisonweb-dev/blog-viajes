<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>



    <?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' ); ?>
    <?php $destacada = $destacada[0]; ?>


    <header class="site-header" style="background-image:url(<?php echo $destacada; ?>)">
        <nav class="navegacion">
            <div class="container">
                <div class="row">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                              <span class="sr-only">Toggle Navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a href="<?php echo esc_url(home_url('/')) ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo img-responsive">
                          </a>
                      </div>
                      <div class="navbar-right">
                          <?php
                            wp_nav_menu(array(
                              'theme_location' => 'menu_principal',
                              'container_id' => 'navbar',
                              'container_class' => 'collapse navbar-collapse',
                              'menu_class' => 'nav navbar-nav navbar-right'
                            ) );

                          ?>
                      </div> <!--.navbar-right-->
                </div> <!--.row-->
            </div><!--.container-->
        </nav><!--.navegacion-->

        <div class="container">
            <div class="row">
                  <div class="col-md-6">
                      <div class="titulo">
                        <?php global $post; ?>
                        <?php if(is_front_page()):  ?>
                            <?php $descripcion = get_bloginfo('description', 'display' ); ?>
                            <h1 class="site-title"><span><?php echo $descripcion; ?></span></h1>
                        <?php elseif(is_category()):  ?>
                            <h1 class="site-title"><span><?php the_archive_title(); ?></span></h1>
                        <?php else: ?>
                            <h1 class="site-title"><span><?php the_title(); ?></span></h1>
                        <?php endif; ?>
                      </div> <!--.titulo-->
                  </div> <!--.col-md-6-->
            </div> <!--.row-->
        </div> <!--.container-->

    </header>
