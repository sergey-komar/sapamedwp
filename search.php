<?php
get_header();
?>
<div class="container">

  <h1 class="search_page">
        <?php
        /* translators: %s: search query. */
        printf( esc_html__( 'Результаты поиска по фразе: %s'), '<span>' . get_search_query() . '</span>' );
        ?>
    </h1>
</div>
 
    

<main class="main">
    <div class="container">
        <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
	    </div>
    </div>
               
    <section class="heading">
        <div class="container">
          <div class="heading__inner">
            <div class="heading__inner-wrapper">
              <div class="heading-block">
                <h1 class="heading-block__title">
                  Медицинский туризм в Турции 
                    для граждан Казахстана 
                </h1>
                <p class="heading-block__text">
                  Мы создали сочетание современных технологий и принципов качественного и оперативного обслуживания
                </p>
                <div class="heading-block__inner">
                  <div class="heading-block__item">
                    <div class="heading-block__item-title">53</div>
                    <p class="heading-block__item-text">Представлям различных услуг</p>
                    <a href="#" class="heading-block__item-link">Все услуги</a>
                  </div>
                  <div class="heading-block__item">
                    <div class="heading-block__item-title">145</div>
                    <p class="heading-block__item-text">
                      Профессональных врачей и специалистов
                    </p>
                    <a href="#" class="heading-block__item-link">Все доктора</a>
                  </div>
                  <div class="heading-block__item">
                    <div class="heading-block__item-title">4567</div>
                    <p class="heading-block__item-text">
                      Пациентов в месяц, отправляются в Турцию на лечение
                    </p>
                  </div>
                </div>
              
              </div>
              <div class="heading__form">
              <?php echo do_shortcode('[contact-form-7 id="230" title="Форма"]');?>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    <div class="treatment">
      <div class="container">
              <div class="treatment__title">
              <?php the_excerpt();?> 
              </div>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="treatment__block">
              <div class="treatment__content">
                <?php the_content();?>
              </div>
            </div>
            <?php endwhile; else: ?>
          <div class="container">
            <div class="page-title">Ничего не найдено</div>
            <div class="page-content">Извините, но ничего не соответствует условиям вашего поиска. Пожалуйста, попытайтесь снова с другими ключевыми словами.</div>
          </div>
            <?php endif; ?>   

            <a href="<?php the_permalink()?>" class="gynecology__btn">Читать подробнее</a>
      </div>
    </div>


      <div class="tretment-calculation">
        <div class="container">
            <div class="calculation">
                <div class="calculation__inner">
                  <div class="calculation__inner-img">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/services-doctor.png" alt="img">
                  </div>
                  <div action="#" class="calculation__form">
                    <?php echo do_shortcode('[contact-form-7 id="231" title="Форма два"]');?>
                  </div>
                </div>
              </div>
        </div>
      </div>


       <div class="treatment-slider treatment-slider__gynecology">
        <div class="container">
            <div class="slider-reviews slider-reviews-treatment">
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
                    <div class="slider-reviews__arrows"></div>
            </div>
              
        
                <div class="slider-reviews__block">
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

      <div class="treatment-slider-doctor treatment-slider-doctor__gynecology">
            <div class="container">
                <div class="slider-doctor">
                    <div class="slider-doctor__box">
                      <div class="slider-doctor__content">
                        <div class="slider-doctor__title">Лучшие врачи Турция</div>
                        <p class="slider-doctor__text">
                          Высококвалифицированные специалисты, которые принимают иностранных пациентов и готовы проконсультировать вас
                        </p>
                      </div>
                      <div class="slider-doctor__arrows"></div>
                    </div>
            
                    <div class="slider-doctor__block">
                      <?php		
                          global $post;
                          $query = new WP_Query( [
                          'posts_per_page' => '12',
                          'post_type'        => 'doctor'
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
                                <p class="slider-doctor__block-text">
                                <?php the_excerpt();?>
                                </p>
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


      <div class="request">
        <div class="container">
          <div class="request__block">
            <div class="request__block-content">
              <div class="request__block-title">
                Оставьте заявку на лечение или задайте вопрос
              </div>
              <p class="request__block-text">
                Мы сотрудничаем с десятками медицинских учреждений Беларуси, поэтому можем посоветовать те клиники, где есть самое лучшее оборудование. Чтобы вы заранее знали, что вас ждет и каковы перспективы лечения, мы  заочную консультацию врача.
              </p>
            </div>
            <div class="request__block-form">
              <div class="heading__form">
                <?php echo do_shortcode('[contact-form-7 id="230" title="Форма"]');?>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="experts">
        <div class="container">
          <div class="slider-doctor">
            <div class="slider-doctor__box">
              <div class="slider-doctor__content">
                <div class="slider-doctor__title">
                  Международно признанные эксперты
                </div>
                <p class="slider-doctor__text">
                  Вас лечат не просто онкологи, хирурги и кардиологи — мы работаем с лучшими международными экспертами в мире. 93% наших врачей имеют национальные и международные награды в области медицины, 40% являются держателями международных патентов, каждый — признанный специалист в своей области.
                </p>
              </div>
              <div class="experts-doctor__arrows"></div>
            </div>
    
            <div class="experts-doctor__block">
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
     
    
   
   </main>
   
<?php
get_footer();
?>