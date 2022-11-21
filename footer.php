<?php

?>
<footer class="footer">
 
 <div class="container">
   <div class="footer__inner">
     <div class="footer__item">
       <a href="#" class="footer__logo">
         <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/footer-logo.svg" alt="img">
       </a>
       <p class="footer__item-text">
         Наши сотрудники всегда рады помочь вам 
         и ответить на все интересующие вопросы. 
       </p>
       <button class="footer__item-btn" data-modal>Отправить заявку</button>
       <p class="footer__item-copyright">Copyright © 2022</p>

       <div class="questions__footer"> 
         <div class="container">
           <section class="questions-footer">
             
               <div class="questions-accardion__footer">
     
                     <div class="questions-footer__wrapper">
                       <div class="questions-accardion__btn">
                         <span class="questions-accardion__title questions-accardion__title-mobile">
                         Компания
                         </span>
                       </div>
                       <div class="questions-accardion__content">
                         <div class="questions-accardion__text questions-accardion__text--footer">
                           <?php
                            wp_nav_menu(
                              array(
                                'theme_location' => 'menu-footermobile',
                                'menu_id'        => '',
                                'container'      => '',
                                'menu_class'	 => 'footer__menu-list',
                                
                              )
                            );
                            ?>
                         </div>
                       </div>
                     </div>
                 
                     <div class="questions-footer__wrapper">
                       <div class="questions-accardion__btn">
                         <span class="questions-accardion__title questions-accardion__title-mobile">
                           Клиентам
                         </span>
                       </div>
                         <div class="questions-accardion__content">
                               <div class="questions-accardion__text questions-accardion__text--footer">
                               <?php
                            wp_nav_menu(
                              array(
                                'theme_location' => 'menu-page-mobile',
                                'menu_id'        => '',
                                'container'      => '',
                                'menu_class'	 => 'footer__menu-list',
                                
                              )
                            );
                            ?>
                               </div>
                         </div>
                     </div>

                     <div class="questions-footer__wrapper">
                       <div class="questions-accardion__btn">
                         <span class="questions-accardion__title questions-accardion__title-mobile">
                         Контакты
                         </span>
                       </div>
                       <div class="questions-accardion__content">
                         <div class="questions-accardion__text questions-accardion__text--footer">
                           <a href="#" class="questions-footer__menu"> 050060, Қазақстан Республикасы, Алматы қаласы, Өтепов көшесі 19а</a>
                           <a href="#" class="questions-footer__menu">+7 988 993 33 11</a>
                           <a href="#" class="questions-footer__menu">info@mail.com</a>
                         </div>
                       </div>
                     </div>
               </div>
             
           </section> 
         </div>
       </div> 
       
       <div class="footer__item-social footer__item-social--modile">
         <p class="footer__item-copyright footer__item-copyright--mobile">Copyright © 2022</p>
         <div class="footer__item-social--modile--block">
           <a href="#" class="footer__item-social-link">
             <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/facebook.svg" alt="img">
           </a>
           <a href="#" class="footer__item-social-link">
             <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/twitter.svg" alt="img">
           </a>
         </div>
       </div>
     </div>

     <div class="footer__item footer__item-mobile">
       <div class="footer__item-title">Компания</div>
    
                <?php
                  wp_nav_menu(
                      array(
                          'theme_location' => 'menu-footer',
                          'menu_id'        => 'nav',
                          'container'      => 'nav',
                          'menu_class'	 => 'footer__menu-list'
                      )
                  );
                  ?>
     </div>

     <div class="footer__item footer__item-mobile">
       <div class="footer__item-title">Клиентам</div>
                <?php
                  wp_nav_menu(
                      array(
                          'theme_location' => 'menu-footer-page',
                          'menu_id'        => 'nav',
                          'container'      => 'nav',
                          'menu_class'	 => 'footer__list'
                      )
                  );
                  ?>
     </div>

     <div class="footer__item footer__item-mobile">
       <div class="footer__item-title">Контакты</div>
       <p class="footer__item-address">
       <? the_field('adres_v_podvale', 'option');?>
       </p>
       <a href="tel:+79889933311" class="footer__item-phone">
        <? the_field('telefon_v_podvale', 'option');?>
      </a>
       <a href="mailto:" class="footer__item-email">
       <? the_field('pochta_v_podvale', 'option');?>
       </a>
       <div class="footer__item-social">
         <a href="#" class="footer__item-social-link">
           <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/facebook.svg" alt="img">
         </a>
         <a href="#" class="footer__item-social-link">
           <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/twitter.svg" alt="img">
         </a>
       </div>
     </div>

   </div>
 </div>
 <div class="modal">
        <div class="modal__inner">
            <div class="modal__inner-block">
                <div  class="modal-form">
                   <?php echo do_shortcode('[contact-form-7 id="332" title="Модальное окно"]');?>
                </div>
            </div>
        </div>
      </div>
 <?php
 wp_footer();
 ?>
</footer>

</body>

</html>