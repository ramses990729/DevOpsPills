<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DevOps Pills</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
        <nav class="navbar w-100 navbar-dark position-relative mt-n2">
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">DevOps-Pills</a>
          <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ourWork">Our Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ourTeam">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact" tabindex="-1">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/?page_id=47&" tabindex="-1">Blog</a>
              </li>
            </ul>
          </div> -->
          <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </nav>