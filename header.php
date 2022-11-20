<?php

?>
<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body>

<header class="header">
  <div class="container-header">
    <div class="header__inner">
      <div class="header__left">
        <?php the_custom_logo();?>
      </div>
      <div class="header__center">
          <div class="header__center-top">
            <div class="header__center-block">
              <?php if ( ! dynamic_sidebar('sidebar-blog') ) : ?>
                <?php dynamic_sidebar( 'sidebar-blog' ); ?>
              <?php endif; ?>
              <p class="header__center-address"><?php the_field('gorod_v_shapke','option');?></p>
            </div>
          </div>
          <div class="header__center-bottom">
            
            <nav class="menu">
              <div action="#" class="header-mobile__form">
                <div class="header-mobile__form-row">
                  <?php if ( ! dynamic_sidebar('sidebar-blog') ) : ?>
                  <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                  <?php endif; ?>
                </div>
              </div>
                      <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-header',
                                'menu_id'        => 'nav',
                                'container'      => 'nav',
                                'menu_class'	 => 'menu__list'
                            )
                        );
                        ?>
            </nav>
           
          </div>
        
      
      </div>
      <div class="header__right">
        <div class="header__right-top">
          <div class="header__right-block">
            <a href="tel:+73427246709" class="header__right-phone"><?php the_field('telefon_v_shapke','option');?></a>
            <p class="header__right-text">
              Звонок по Казахстану бесплатный
            </p>
          </div>
          <button class="header__right-btn">Записаться на прием</button>
         
        </div>
        <div class="header__right-bottom">
          <a href="mailto:" class="header__right-email"><?php the_field('adres_v_shapke','option');?></a>
        </div>
      </div>

      <div class="nav-icon">
        <div class="nav-icon__middle"></div>
      </div>
    </div>
  </div>
</header>