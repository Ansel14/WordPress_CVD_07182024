<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_front_page() ? bloginfo('title') : wp_title(''); ?></title>
    <?php wp_head() ?>
  </head>
  <body data-barba="wrapper">
  <?php if(!is_page('contact')) {?> 
    <!-- HEADER -->
    <div
      id="page-transition"
    ></div>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <!-- branding -->
          <div class="header__brand">
            <a href="<?php echo site_url('/') ?>"
              ><img src="<?php echo get_template_directory_uri() ?>/img/home/Brand.svg" alt="brand logo"
            /></a>
            <ul class="header__wrapper--title">
              <li>Creative</li>
              <li>Visual</li>
              <li>Designs</li>
            </ul>
          </div>
          <div class="header__Nav">
           <?php wp_nav_menu(array(
                'theme_location' => 'header_menu'
            )) ?>
            </div>
          <!-- toggle menu -->
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>
    <?php } ?>

    <?php if(is_page('contact')) {?>  
      <!-- HEADER -->
      <div
      id="page-transition"
      ></div>
    <header class="header" id="contact__header">
      <div class="container">
        <div class="header__wrapper">
          <!-- branding -->
          <div class="header__brand">
            <a href="<?php echo site_url('/') ?>"
              ><img src="<?php echo get_template_directory_uri() ?>/img/home/Brand.svg" alt="brand logo"
            /></a>
            <ul class="header__wrapper--title">
              <li>Creative</li>
              <li>Visual</li>
              <li>Designs</li>
            </ul>
          </div>
          <div class="header__Nav">
           <?php wp_nav_menu(array(
                'theme_location' => 'header_menu'
            )) ?>
            </div>
          <!-- toggle menu -->
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>
    <?php } ?>