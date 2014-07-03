<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <header class="navbar main-header navbar-inverse navbar-fixed-top" role="navigation">
      
              <div class="container">
                
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
                        </div>
<img class="dateFloat" src="<?php bloginfo('template_directory'); ?>/images/date.png" />
                       
              </div><!-- container -->

              <div class="container-fluid nav-bg">
                <div class="container">
                   <nav class="navbar-collapse collapse">

                          <?php 
                            $args = array(
                              'menu'        => 'header-menu',
                              'menu_class'  => 'nav navbar-nav',
                              'container'   => 'false'
                            );
                            wp_nav_menu( $args );
                          ?>

                        </nav><!--/.navbar-collapse -->

                </div>

              </div>
    </header>