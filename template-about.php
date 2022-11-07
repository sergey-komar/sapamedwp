<?php
/*
 Template name: О нас
 */
?>
<?php
get_header();
?>
<main>
    <section class="about">
        <div class="container">
            <div class="about__subtitle">О нас</div>
            <div class="about__inner">
                <h1 class="about__title">
                <? the_field('zagolovok_stranicza_o_nas');?>
                </h1>
                <p class="about__text">
                <? the_field('podzagolovok_stranicza_o_nas');?>
                </p>
                <div class="about__block">
                    <div class="about__item">
                        <div class="about__item-img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/about-icon-1.svg" alt="img">
                        </div>
                        <p class="about__item-text">
                        <? the_field('tekst_levo_stranicza_o_nas');?>
                        </p>
                    </div>
                    <div class="about__item">
                        <div class="about__item-img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/about-icon-2.svg" alt="img">
                        </div>
                        <p class="about__item-text">
                        <? the_field('tekst_pravo_stranicza_o_nas');?>
                        </p>
                    </div>
                </div>
            </div>
          

            <div class="about__img">
                <img src="<?php echo get_field('izobrazhenie_stranicza_o_nas')['url'];?>" alt="img">
            </div>
        </div>


        <div class="about-slider">
            <div class="container">
                <div class="slider-doctor">
                    <div class="slider-doctor__box">
                      <div class="slider-doctor__content">
                        <div class="slider-doctor__title">
                            Команда признаных экспертов 
                        </div>
                        <p class="slider-doctor__text">
                            Вас лечат не просто онкологи, хирурги и кардиологи — мы работаем с лучшими международными экспертами в мире. 93% наших врачей имеют национальные и международные награды в области медицины, 40% являются держателями международных патентов, каждый — признанный специалист в своей области.
                        </p>
                      </div>
                      <div class="slider-about__arrows"></div>
                    </div>
            
                    <div class="slider-about__block">
                          <?php		
                              global $post;
                              $query = new WP_Query( [
                              'posts_per_page' => '12',
                              'post_type'        => 'experts'
                              ] );
                              if ( $query->have_posts() ) {
                                  while ( $query->have_posts() ) {
                                  $query->the_post();
                          ?>
                      <a href="<?php the_permalink();?>" class="slider-doctor__block-wrapper">
                        <div class="slider-doctor__block-item">
                          <div class="slider-doctor__block-img">
                            <img src="<?php the_post_thumbnail_url();?>" alt="img">
                          </div>
                          <div class="slider-doctor__block-title">
                          <?php the_title();?>
                          </div>
                          <p class="slider-doctor__block-text"><?php the_excerpt();?></p>
                        </div>
                      </a>
                          <?php }
                              } 
                              else {
                                
                            }
                            wp_reset_postdata(); 
                          ?> 
                    </div>
                  </div>
            </div>
        </div>

         <div class="mission">
            <div class="container">
                <div class="mission__inner">
                    <div class="mission__title"> <? the_field('zagolovok_nasha_missiya');?></div>
                    <p class="mission__text">
                    <? the_field('tekst_nasha_missiya');?>
                    </p>
                </div>
            </div>
        </div>

        <div class="values">
            <div class="container">
                <div class="values__title"> <? the_field('zagolovok_nashi_czennosti');?></div>
                <p class="values__text">
                <? the_field('tekst_nashi_czennosti');?>
                </p>
                <div class="values__block">
                    <div class="values__item">
                        <div class="values__item-img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/about-img-1.jpg" alt="img">
                        </div>
                        <div class="values__item-content">
                            <div class="values__item-title"> Осознаем важность вашей безопасности</div>
                            <div class="values__item-text">
                                Мы принимаем все меры по обеспечению безопасности пациентов, уберегая от вреда в результате ошибок, которые можно избежать.
                            </div>
                        </div>
                    </div>
                    <div class="values__item">
                        <div class="values__item-content">
                            <div class="values__item-title"> Знаем и стоим на защите ваших прав</div>
                            <div class="values__item-text">
                                Cоблюдаем права пациента на получение наиболее полной информации и точных сведений по вопросам прав и обязанностей. Мы осознаем свою ответственность и стоим на защите прав каждого пациента без исключения.
                            </div>
                        </div>
                        <div class="values__item-img values__item-img--order">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/about-img-2.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="about-reviews">
            <div class="container">
                <div class="slider-reviews">
                    <div class="slider-reviews__title">Отзывы пациентов</div>
                    <div class="slider-reviews__box">
                      <div class="slider-reviews__content">
                        <div class="slider-reviews__content-title">Рейтинг 4.9/5</div>
                        <div class="slider-reviews__content-img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                        </div>
                        <div class="slider-reviews__content-text">50 Отзывов</div>
                      </div>
                      <div class="slider-reviews__arrows-about"></div>
                    </div>
                  
            
                    <div class="slider-reviews__block-about">

                          <?php		
                              global $post;
                              $query = new WP_Query( [
                              'posts_per_page' => '12',
                              'post_type'        => 'reviews'
                              ] );
                              if ( $query->have_posts() ) {
                                  while ( $query->have_posts() ) {
                                  $query->the_post();
                          ?>
                      <div class="slider-reviews__wrapper">
                        <div class="slider-reviews__item">
                          <div class="slider-reviews__item-title">
                           <?php the_title();?>
                          </div>
                          <div class="slider-reviews__item-img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                            <img src="<?php echo get_template_directory_uri()?>./assets/images/liv/liv-star.svg" alt="img">
                          </div>
                          <p class="slider-reviews__item-text">
                           <?php the_excerpt();?>
                          </p>
                          <a href="<?php the_permalink();?>" class="slider-reviews__item-link">Читать далее</a>
                        </div>
                      </div>

                            <?php }
                                } 
                                else {
                                  
                              }
                              wp_reset_postdata(); 
                            ?> 
                    </div>
                  </div>
            </div>
        </div>


        <div class="selection">
            <div class="container">
              <div class="selection-box">
                <div class="selection-box__item">
                  <div class="selection-box__inner">
                    <div class="selection-box__item-img">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/selection-1.jpg" alt="img">
                    </div>
                    <p class="selection-box__item-text">
                      <span>Бесплатный подбор клиник на период лечения.</span>
                      Все клиники проходят строгий отбор.
                    </p>
                  </div>
                </div>
                <div class="selection-box__item">
                  <div class="selection-box__inner">
                    <div class="selection-box__item-img">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/selection-2.jpg" alt="img">
                    </div>
                    <p class="selection-box__item-text">
                      <span>Высококлассное лечение</span>
                      В Турции, у лучших врачей страны.
                    </p>
                  </div>
                </div>
                <div class="selection-box__item">
                  <div class="selection-box__inner">
                    <div class="selection-box__item-img">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/selection-3.jpg" alt="img">
                    </div>
                    <p class="selection-box__item-text">
                      <span>Вы заключаете договор напрямую с клиникой.</span>
                      Мы не являемся посредниками
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>


    <div class="request-bottom about">
        <div class="container">
          <div class="request-bottom__inner">
            <div class="request-bottom__content">
              <div class="request-bottom__content-title">
                Отправить запрос
              </div>
              <p class="request-bottom__content-text">
                Наши сотрудники всегда рады помочь вам и ответить на все интересующие вопросы. Заполните форму, вписав свои данные, чтобы получить бесплатную консультацию по организации лечения.
              </p>
              <div class="request-bottom__content-box">
                <div class="request-bottom__content-phone">
                  <a href="tel:88005509491" class="request-bottom__content-phone-link request-bottom__content-phone--one">
                    8 800 550-94-91
                  </a>
                  <p class="request-bottom__content-phone-text">
                    Телефон для стран СНГ
                  </p>
                </div>
                <div class="request-bottom__content-phone">
                  <a href="tel:+4921197531560" class="request-bottom__content-phone-link request-bottom__content-phone--two">
                    +49 211 975-315-60
                  </a>
                  <p class="request-bottom__content-phone-text">
                    Телефон для консультации
                  </p>
                </div>
              </div>
            </div>
            <div class="request-bottom__form">
              <form class="heading__form">
                <div class="heading__form-title">
                  Заполните свои данные, чтобы получить бесплатную консультацию
                </div>
                <input type="text" class="heading__form-input" placeholder="Имя">
                <div class="heading__form-wrapper">
                  <input type="text" class="heading__form-input" placeholder="Номер телефона">
                </div>
                <button class="heading__form-btn button">Отправить заявку</button>
                <p class="heading__form-text">
                  Оставляя заявку на сайте вы соглашаетесь 
                  с политикой конфиденциальности
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
</main> 

<?php
get_footer();
?>