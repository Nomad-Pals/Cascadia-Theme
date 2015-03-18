<?php use Roots\Sage\Nav; ?>

<header>
  <div class="banner navbar navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </div>
  
      <nav class="collapse navbar-collapse" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
        endif;
        ?>
      </nav>
    </div>
  </div>
  <div class="header-featured-image">
    <?php 
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('full');
      } else {
        echo '<img src="/wp-content/uploads/vancouver-art-weiwei-stools.jpg" alt="">';
      }
    ?>
  </div>
</header>
