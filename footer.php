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
       <button class="footer__item-btn">Отправить заявку</button>
       <p class="footer__item-copyright">Copyright © 2019</p>

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
                           <a href="#" class="questions-footer__menu">Главная</a>
                           <a href="#" class="questions-footer__menu">О нас</a>
                           <a href="#" class="questions-footer__menu">Врачи</a>
                           <a href="#" class="questions-footer__menu">Услуги</a>
                           <a href="#" class="questions-footer__menu">Контакты</a>
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
                                   <div class="footer__inner-item ">
                                     <div class="footer__inner-info">
                                       <a href="#" class="footer__inner-phone">Способы оплаты</a>
                                     </div>
                                     <div class="footer__inner-info">
                                       <a href="#" class="footer__inner-phone">Часто задаваемые вопросы</a>
                                     </div>
                                   </div>
                                   <div class="footer__inner-item">
                                     <div class="footer__inner-info">
                                       <a href="#" class="footer__inner-phone">Курортный сбор</a>
                                     </div>
                                     <div class="footer__inner-info">
                                       <a href="#" class="footer__inner-phone">Возврат денежных средств</a>
                                     </div>
                                   </div>
                                   <div class="footer__inner-item">
                                     <div class="footer__inner-info">
                                       <a href="#" class="footer__inner-phone">Дисконтная карта</a>
                                     </div>
                                   </div>
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
         <p class="footer__item-copyright footer__item-copyright--mobile">Copyright © 2019</p>
         <div class="footer__item-social--modile--block">
           <a href="#" class="footer__item-social-link">
             <img src="./images/icon/facebook.svg" alt="img">
           </a>
           <a href="#" class="footer__item-social-link">
             <img src="./images/icon/twitter.svg" alt="img">
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
 <?php
 wp_footer();
 ?>
</footer>

</body>

</html>