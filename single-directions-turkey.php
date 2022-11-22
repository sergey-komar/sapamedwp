<?php 
get_header();
?>

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
                  <?php the_field('zagolovok_napravleniya');?>
                </h1>
                <p class="heading-block__text">
                  <?php the_field('podzagolovok_napravleniya');?>
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
                <?php echo do_shortcode('[contact-form-7 id="230" title="Форма"]')?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="heading-bottom">
        <div class="container">
          <div class="heading-info">
            <div class="heading-info__title">Информация по лечению</div>
            <div class="heading-info__inner">
              <div class="heading-info__item">
                <div class="heading-info__item-title">Приём пациентов</div>
                <p class="heading-info__item-text">
                  Осуществляется прием всех категорий пациентов. Ношение маски в кабинете врача является обязательным условием.
                </p>
              </div>
              <div class="heading-info__item">
                <div class="heading-info__item-title">Правила въезда в страну</div>
                <p class="heading-info__item-text">Лицам старше 12 лет необходимо предъявить либо ПЦР-тест (не старше 72 часов), либо тест на антиген (не старше 48 часов), либо сертификат о полной вакцинации, либо документ о выздоровлении (не старше 6 месяцев).</p>
              </div>
              <div class="heading-info__item">
                <div class="heading-info__item-title">Медицинские визы</div>
                <p class="heading-info__item-text">Граждане 78 стран освобождены от визы на срок от 30 до 90 дней, еще 43 страны могут получить электронную визу. За уточнением правил визового режима для вашей страны обратитесь к менеджеру компании.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="directions">
        <div class="container">
          <div class="directions__title">Направления медицины</div>
          <div class="directions__inner">
            <div class="directions-block">
    
            <?php
                global $post;
                $query = new WP_Query([
                  'post_per_page' => '30',
                  'post_type' => 'directions'
                ]);
                if($query->have_posts()){
                  while($query->have_posts()){
                    $query->the_post();
              ?>

            <li class="directions-block__item list-item">
              <a href="<?php the_permalink();?>">
                <img src="<?php the_post_thumbnail_url();?>" alt="img" class="directions-block__item-img">
                <p class="directions-block__item-text"><?php the_title();?></p>
              </a>
            </li>
                <?php }
                }
                    
                    else{
                        'Постов нет';
                    } 
                    wp_reset_postdata();
                ?>
          
            </div>
            <button class="directions-block__btn">Показать ещё</button>
          </div>
    
          <div class="help">
            <div class="help__title">Как мы помогаем</div>
            <div class="help__inner">
              <div class="help__content">
                <p class="help__content-text">
                </p>
                <strong class="help__content-text">
                  Вы можете самостоятельно выбрать клинику и врача или бесплатно проконсультироваться с нашими экспертами.
                </strong>
                <p class="help__content-text">
                  Наши врачи-эксперты перезвонят вам в течение дня, ознакомятся с документами и помогут подобрать лучшие опции лечения заболеваний в Турции. На запросы наших врачей отвечают лучшие мировые специалисты. После принятия предложения, мы организуем вашу поездку от А до Я — берем на себя перевод документов, общение с клиникой, помогаем в получении приглашения и визы, встречаем и предоставляем переводчика и трансфер.
                </p>
              </div>
              <div class="help__service">
                <div class="help__service-top">
                  <p class="help__service-top-text">
                    Персональные менеджеры и служба поддержки клиентов работают 
                    в режиме 24/7, помогая решать любые проблемы.                
                  </p>
                </div>
                <div class="help__service-bottom">
                  <div class="help__service-item">
                    <div class="help__service-item-title help__service-item-left">
                      Поддержка
                    </div>
                    <div class="help__service-item-text">
                      24 часа в сутки, семь дней 
                      в неделю, 365 дней в году
                    </div>
                  </div>
                  <div class="help__service-item">
                    <div class="help__service-item-title help__service-item-right">
                      Бесплатный сервис
                    </div>
                    <div class="help__service-item-text">
                      Вы оплачиваете услуги напрямую в клинике.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 


      <div class="medicine-hizar treatment-hizar">
        <div class="container">
            <div class="medicine-hizar__title">
              <?php the_field('napravlenie_pervyj_blok_zagolovok');?> 
            </div>
            <div class="medicine-hizar__block">
                <div class="medicine-hizar__block-title">
                  <?php the_field('napravlenie_pervyj_blok_podzagolovok_odin');?>  
                </div>
                <p class="medicine-hizar__block-text">
                  <?php the_field('napravlenie_pervyj_blok_abzacz_odin');?> 
                </p>
            </div>
                <div class="medicine-hizar__box">
                    <div class="medicine-hizar__img">
                        <img src="<?php echo get_field('napravlenie_pervyj_blok_izobrazhenie')['url'];?> " alt="img">
                    </div>

                    <div class="medicine-hizar__content">
                        <div class="medicine-hizar__content-subtitle">
                          <?php the_field('napravlenie_pervyj_blok_podzagolovok_dva');?>  
                        </div>
                        <p class="medicine-hizar__content-text">
                          <?php the_field('napravlenie_pervyj_blok_abzacz_dva');?>  
                        </p>
                    </div>
                </div>
          

            <div class="medicine-hizar__footer">
                <div class="medicine-hizar__footer-img">
                    <img src="<?php echo get_field('napravlenie_pervyj_blok_izobrazhenie_czitata')['url'];?>" alt="img">
                </div>
                <p class="medicine-hizar__footer-text treatment-hizar__footer-text" >
                  <?php the_field('napravlenie_pervyj_blok_czitata');?> 
                </p>
            </div>

            <p class="treatment-hizar__text">
              <?php the_field('napravlenie_pervyj_blok_abzacz_tri');?> 
            </p>
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


      <div class="wellness">
        <div class="container">
          <div class="wellness__title">
            <?php the_field('napravleniya_vtoroj_blok_zagolovok');?>
          </div>
          <div class="wellness__block medicine-wellness__block">
            <div class="wellness__img medicine-wellness__img">
              <img src="<?php echo get_field('napravleniya_vtoroj_blok_izobrazhenie')['url'];?>" alt="img">
            </div>
            <div class="wellness__content medicine-wellness__content">
              <p class="wellness__content-text medicine-wellness__content-text">
                <?php the_field('napravleniya_vtoroj_blok_abzacz_odin');?>
              </p>
            </div>
          </div>
    
          <p class="wellness__bottom-text medicine-wellness__bottom-text treamtent-wellness__bottom-text">
          <span> <?php the_field('napravleniya_vtoroj_blok_podzagolovok');?></span><br>
            <?php the_field('napravleniya_vtoroj_blok_abzacz_dva');?>
          </p>

          <div class="wellness__center treatment-hizar">
            <blockquote class="hisar__reviews medicine-hisar ">
                <?php the_field('napravleniya_vtoroj_blok_czitata');?>
              </blockquote>
          </div>
        </div>
      </div>

       <div class="treatment-slider">
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

      <div class="triangle triangle-treatment">
        <div class="container">
            <div class="triangle__inner">
                <div class="triangle__inner-content triangle-treatment__inner-content">
                    <div class="triangle__inner-title">
                      <?php the_field('napravleniya_tretij_blok_zagolovok');?>
                    </div>
                    <div class="triangle__inner-subtitle">
                      <?php the_field('napravleniya_tretij_blok_podzagolovok');?>
                    </div>
                    <p class="triangle__inner-content triangle-treatment__inner-content">
                      <?php the_field('napravleniya_tretij_blok_abzacz');?>
                    </p>
                </div>

                <div class="triangle__inner-img triangle-treatment__inner-img">
                    <img src="<?php echo get_field('napravleniya_tretij_blok_izobrazhenie')['url'];?>" alt="img">
                </div>
            </div>
        </div>
      </div>


      <div class="treatment-slider-doctor">
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


      <div class="algorithm algorithm-treatment">
        <div class="container">
          <div class="algorithm__title">
            Алгоритм обращения в медицинскую органицацию для иностранного гражданина
          </div>
          <div class="algorithm__block">
            <div class="algorithm__item">
              <div class="algorithm__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/algorithm-1.svg" alt="img">
              </div>
              <p class="algorithm__item-text">Оценка проведения диагностики и лечения</p>
            </div>
            <div class="algorithm__item algorithm__item-top">
              <div class="algorithm__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/algorithm-2.svg" alt="img">
              </div>
              <p class="algorithm__item-text">
                Предварительная программа / расчет
              </p>
            </div>
            <div class="algorithm__item">
              <div class="algorithm__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/algorithm-3.svg" alt="img">
              </div>
              <p class="algorithm__item-text">
                Оказание содействия в приезде / получения визы
              </p>
            </div>
            <div class="algorithm__item algorithm__item-top">
              <div class="algorithm__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/algorithm-4.svg" alt="img">
              </div>
              <p class="algorithm__item-text">
                Прибытие пациента / диагностика и лечение
              </p>
            </div>
            <div class="algorithm__item">
              <div class="algorithm__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/algorithm-5.svg" alt="img">
              </div>
              <p class="algorithm__item-text">
                Выдача заключений и рекомендаций на языке пициента
              </p>
            </div>
            <div class="algorithm__item algorithm__item-top">
              <div class="algorithm__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/algorithm-6.svg" alt="img">
              </div>
              <p class="algorithm__item-text">
                Заявка на лечение / направление документов
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="arthritis arthritis-medicine">
        <div class="container">
          <div class="arthritis__title">
            <?php the_field('napravleniya_chetvyortyj_blok_zagolovok');?>
          </div>
         <div class="arthritis__block arthritis-medicine__block">
          <div class="arthritis__content">
            <div class="arthritis__content-title">
              <?php the_field('napravleniya_chetvyortyj_blok_podzagolovok');?>
            </div>
            <p class="arthritis__content-text">
              <?php the_field('napravleniya_chetvyortyj_blok_abzacz_odin');?>
            </p>
          </div>
          <div class="arthritis__img">
            <img src="<?php echo get_field('napravleniya_chetvyortyj_blok_izobrazhenie_bolshoe')['url'];?>" alt="img">
          </div>
         </div>
    
         <div class="arthritis__bottom">
            <div class="arthritis__bottom-img">
              <img src="<?php echo get_field('napravleniya_chetvyortyj_blok_izobrazhenie_malenkoe')['url'];?>" alt="img">
            </div>
            <p class="arthritis__bottom-text arthritis-medicine__bottom-text">
              <?php the_field('napravleniya_chetvyortyj_blok_abzacz_dva');?>
            </p>
         </div>

         <p class="arthritis-medicine__text arthritis-medicine__text">
            <?php the_field('napravleniya_chetvyortyj_blok_abzacz_tri');?>
         </p>
        </div>
      </div>


      <div class="selection selection-medicine">
        <div class="container">
          <div class="selection-box">
            <div class="selection-box__item">
              <div class="selection-box__inner">
                <div class="selection-box__item-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/selection-1.jpg" alt="img">
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
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/selection-2.jpg" alt="img">
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
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/selection-3.jpg" alt="img">
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

      <div class="medicine-icon treatment-icon">
        <div class="container">
            <div class="medicine-icon__inner">
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine1.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Удаленное консультирование для пациентов из других стран и городов
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine2.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Комплексный подход к эстетике: пластика, косметология и стоматология в одной клинике
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine3.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Специалисты первой величины российской эстетической медицины
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine4.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Мировой стандарт контроля качества
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine5.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Высокотехнологичное оборудование последнего поколения
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine6.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Координация вашего плана лечения, где бы вы ни находились
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine7.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        За нас говорят наши результаты
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine8.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Сбалансированные цены без скрытых расходов
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine9.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Палаты класса люкс и высокий уровень сервиса
                    </p>
                </div>
                <div class="medicine-icon__item">
                    <div class="medicine-icon__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/page-medicine/icon-medicine/icon-medicine10.svg" alt="img">
                    </div>
                    <p class="medicine-icon__item-text">
                        Удобное расположение в центре города
                    </p>
                </div>
            </div>
        </div>
      </div>

      <div class="why">
        <div class="container">
          <div class="why__title">Почему выбирают нас?</div>
          <div class="why__block">
            <div class="why__block-item">
              <img class="why__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/why-1.png" alt="img">
              <div class="why__block-title">Современный уровень медицины</div>
              <p class="why__block-text">
                Новейшие медицинские технологии, соответствующие мировым стандартам и развитая сеть медицинских центров с самым современным оборудованием
              </p>
            </div>
            <div class="why__block-item">
              <img class="why__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/why-2.png" alt="img">
              <div class="why__block-title">Квалифицированные врачи</div>
              <p class="why__block-text">
                Медицинская школа Беларуси известна по всему миру: лучшие врачи, которые постоянонно повышают свою квалификацию.
              </p>
            </div>
            <div class="why__block-item">
              <img class="why__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/why-3.png" alt="img">
              <div class="why__block-title">Полное сопровождение</div>
              <p class="why__block-text">
                Все вопросы сопровождения, такие, как трансфер, бронирование гостиниц и запись на прием к специалистам, на себя берет компания
              </p>
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
                <?php echo do_shortcode('[contact-form-7 id="230" title="Форма"]')?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="organization">
        <div class="container">
          <div class="organization__title">
            Организация лечения онкологических заболеваний в лучших клиниках Турции
          </div>
          <p class="organization__text">
            Все консультации, лечение и операции проводят высококвалифицированные доценты и профессора, которые состоят в Европейских и Мировых ассоциациях врачей, с международной репутацией и хорошими отзывами от пациентов.
          </p>
          <div class="organization__block">
            <div class="organization__block-item">
              <img class="organization__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/organization/organization-1.svg" alt="img">
              <p class="organization__block-text">
                Доктора с мировым именем
              </p>
            </div>
            <div class="organization__block-item">
              <img class="organization__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/organization/organization-2.svg" alt="img">
              <p class="organization__block-text">
                Предоставление переводчика
              </p>
            </div>
            <div class="organization__block-item">
              <img class="organization__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/organization/organization-3.svg" alt="img">
              <p class="organization__block-text">
                Цены на 30-40 % ниже, чем в Германии и Израиле
              </p>
            </div>
            <div class="organization__block-item">
              <img class="organization__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/organization/organization-4.svg" alt="img">
              <p class="organization__block-text">
                Лечебное и диагностическое оборудование соответствует мировым стандартам
              </p>
            </div>
            <div class="organization__block-item">
              <img class="organization__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/organization/organization-5.svg" alt="img">
              <p class="organization__block-text">
                Протоколы лечения аналогичны стандартам ведущих клиник мира
              </p>
            </div>
            <div class="organization__block-item">
              <img class="organization__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/organization/organization-6.svg" alt="img">
              <p class="organization__block-text">
                Бесплатный трансфер
              </p>
            </div>
            <div class="organization__block-item">
              <img class="organization__block-img" src="<?php echo get_template_directory_uri()?>/assets/images/organization/organization-7.svg" alt="img">
              <p class="organization__block-text">
                Круглосуточная поддержка 24/7
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="medical-examination">
        <div class="container">
            <div class="medical-examination__title">
              <?php the_field('napravleniya_pyatyj_blok_zagolovok');?>
            </div>
            <div class="medical-examination__inner">
                <div class="medical-examination__item">
                    <div class="medical-examination__item-img">
                        <img src="<?php echo get_field('napravleniya_pyatyj_blok_izobrazhenie_odin')['url'];?>" alt="img">
                    </div>
                    <div class="medical-examination__item-title">
                      <?php the_field('napravleniya_pyatyj_blok_podzagolovok_odin');?>
                    </div>
                    <p class="medical-examination__item-text">
                      <?php the_field('napravleniya_pyatyj_blok_tekst_odin');?>
                    </p>
                </div>
                <div class="medical-examination__item">
                    <div class="medical-examination__item-img">
                        <img src="<?php echo get_field('napravleniya_pyatyj_blok_izobrazhenie_dva')['url'];?>" alt="img">
                    </div>
                    <div class="medical-examination__item-title">
                      <?php the_field('napravleniya_pyatyj_blok_podzagolovok_dva');?>
                    </div>
                    <p class="medical-examination__item-text">
                      <?php the_field('napravleniya_pyatyj_blok_tekt_dva');?>
                    </p>
                </div>
                <div class="medical-examination__item">
                    <div class="medical-examination__item-img">
                        <img src="<?php echo get_field('napravleniya_pyatyj_blok_izobrazhenie_tri')['url'];?>" alt="img">
                    </div>
                    <div class="medical-examination__item-title">
                      <?php the_field('napravleniya_pyatyj_blok_podzagolovok_tri');?>
                    </div>
                    <p class="medical-examination__item-text">
                      <?php the_field('napravleniya_pyatyj_blok_tekst_tri');?>
                    </p>
                </div>
            </div>

            <div class="treatment-examination__bottom">
                <div class="treatment-examination__bottom-img">
                    <img src="<?php echo get_field('napravleniya_pyatyj_blok_izobrazhenie_czitaty')['url'];?>" alt="img">
                </div>
                <p class="medical-examination__text treatment-examination__text">
                  <?php the_field('napravleniya_pyatyj_blok_czitata');?>
                </p>
            </div>
           
        </div>
      </div>


      <div class="kinds">
        <div class="container">
          <div class="kinds__title">Виды услуг</div>
          <div class="kinds-box">
            <div class="kinds-box__left">
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_pervaya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_vtoraya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_tretya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_chetvyortaya');?></a>
              </div>
            </div>
        
             
            <div class="kinds-box__center">
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_pyataya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_shestaya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_sedmaya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_vosmaya');?></a>
              </div>
            </div>
          
            <div class="kinds-box__right">
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_devyataya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_desyataya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_odinadczataya');?></a>
              </div>
              <div class="kinds-box__item">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/kinds-services.svg" alt="img">
                <a href="#" class="kinds-box__link"><?php the_field('napravleniya_vidy_uslug_dvenadczataya');?></a>
              </div>
            </div>
          
          </div>
        </div>
      </div>

      <div class="medicine">
        <div class="container">
              <div class="medicine__inner">
                <div class="medicine__top">
                    <?php
                      global $post;
                      $query = new WP_Query([
                        'posts_per_page' => '30',
                        'post_type' => 'treatment'
                      ]);
                      if($query->have_posts()){
                        while($query->have_posts()){
                          $query->the_post();
                      ?>
                        <a href="<?php the_permalink();?>" class="medicine__item">
                          <div class="medicine__item-img">
                            <img src="<?php the_post_thumbnail_url();?>" alt="img">
                          </div>
                          <p class="medicine__item-text"><?php the_title();?></p>
                        </a>
                        <?php
                        }
                      }
                      else{
                        
                      }
                        wp_reset_postdata();
                      ?>
                </div>
                <div class="medicine__bottom hide">
                      <?php
                      global $post;
                      $query = new WP_Query([
                        'posts_per_page' => '30',
                        'post_type' => 'treatment-hide'
                      ]);
                      if($query->have_posts()){
                        while($query->have_posts()){
                          $query->the_post();
                      ?>
                    <a href="<?php the_permalink();?>" class="medicine__item">
                      <div class="medicine__item-img">
                        <img src="<?php the_post_thumbnail_url();?>" alt="img">
                      </div>
                      <p class="medicine__item-text"><?php the_title();?></p>
                    </a>
                    <?php
                    }
                          }
                      else{
                        echo 'Постов нет';
                      }
                      wp_reset_postdata();
                    ?>
                </div>
              </div>
    
          <button class="medicine__btn">Показать еще 12</button>
        </div>
      </div>


      <div class="benefits">
        <div class="container">
          <div class="benefits__title">Преимущества</div>
          <div class="benefits__block">
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-1.jpg" alt="img">
              </div>
              <p class="benefits__block-text">
                Аккредитации международных организаций OECI, ESMO, JCI
              </p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-2.jpg" alt="img">
              </div>
              <p class="benefits__block-text">
                ТОП-10 MTQUA(Система оценки качества медицинского туризма)
              </p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-3.jpg" alt="img">
              </div>
              <p class="benefits__block-text">
                Сотрудничество с Медицинским центром Джонcа Хопкинса (США)
              </p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-4.jpg" alt="img">
              </div>
              <p class="benefits__block-text">
                Новейшие методы лечения рака
              </p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-5.jpg" alt="img">
              </div>
              <p class="benefits__block-text">Уникальное оборудование</p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-6.jpg" alt="img">
              </div>
              <p class="benefits__block-text">Врачи с мировым именем</p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-7.jpg" alt="img">
              </div>
              <p class="benefits__block-text">Бесплатные услуги перевода</p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-8.jpg" alt="img">
              </div>
              <p class="benefits__block-text">
                Бесплатный трансфериз аэропорта
              </p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-9.jpg" alt="img">
              </div>
              <p class="benefits__block-text">Помощь в размещении</p>
            </div>
            <div class="benefits__block-item">
              <div class="benefits__block-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/benefits/benefits-10.jpg" alt="img">
              </div>
              <p class="benefits__block-text">Бесплатное второе медицинское мнение</p>
            </div>
          </div>
        </div>
      </div>


      <div class="video">
        <div class="container">
          <div class="video__title">Видео</div>
          <div class="video__block">
            <?php if(have_rows('napravleniya_video_kottent')) : while(have_rows('napravleniya_video_kottent')) : the_row(); ?>
            <a href="<?php the_sub_field('napravleniya_video_ssylka');?>" class="video__item">
                <div class="video__item-img">
                <img src="<?php the_sub_field('napravleniya_video_izobrazhenie');?>" alt="img">
                <p class="video__item-text"><?php the_sub_field('napravleniya_video_tekst');?></p>
                </div>
            </a>
            <?php endwhile; endif; ?>
      </div>
        </div>
      </div>


      <div class="medicine-work">
        <div class="container">
            <div class="medicine-work__block">
                <div class="medicine-work__content">
                    <div class="medicine-work__title">Как мы работаем:</div>
                    <p class="medicine-work__content-text">
                        — Вы оставляете заявку на сайте
                    </p>
                    <p class="medicine-work__content-text">
                        — Наш менеджер связывается с вами и консультирует по услугам и их стоимости
                    </p>
                    <p class="medicine-work__content-text">
                        — Вы присылаете имеющиеся документы и указываете хронологию заболевания
                    </p>
                    <p class="medicine-work__content-text">
                        — Доктора рассматривают присланные документы и изучают хронологию болезни
                    </p>
                    <p class="medicine-work__content-text">
                        — Наш менеджер связывается с вами и сообщает о лечении, его примерную стоимость и возможные даты визита
                    </p>
                    <p class="medicine-work__content-text">
                         — Менеджер согласовывает даты пребывания и записывает на прием.
                    </p>
                </div>
                <div class="heading__form">
                  <?php echo do_shortcode('[contact-form-7 id="230" title="Форма"]')?>
                </div>
            </div>
        </div>
      </div>


      <div class="liv medicine-liv">
        <div class="container">
            <div class="liv__block">
                <div class="liv__item">
                  <div class="liv__item-content">
                    <div class="liv__item-title"> Огромный практический опыт врачей</div>
                    <p class="liv__item-text">
                      Турецкие врачи обучались в ведущих медицинских университетах США, Германии, Франции и сейчас работают на родине.
                    </p>
                  </div>
                  <div class="liv__item-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-1.jpg" alt="img">
                  </div>
                </div>
                <div class="liv__item">
                  <div class="liv__item-content">
                    <div class="liv__item-title"> Стандарты Европы и США</div>
                    <p class="liv__item-text">
                      В Турции методики лечения соответствуют не только строгим европейским протоколам, но и требованиям американской ассоциации FDA.
                    </p>
                  </div>
                  <div class="liv__item-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-2.jpg" alt="img">
                  </div>
                </div>
                <div class="liv__item">
                  <div class="liv__item-content">
                    <div class="liv__item-title"> Высокий уровень медицины</div>
                    <p class="liv__item-text">
                      Турция занимает первое место 
                      в мире по количеству клиник, которые получили JCI-аккредитацию - это 44 клиники.
                    </p>
                  </div>
                  <div class="liv__item-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-3.jpg" alt="img">
                  </div>
                </div>
                <div class="liv__item">
                  <div class="liv__item-content">
                    <div class="liv__item-title"> Новейшее оборудование</div>
                    <p class="liv__item-text">
                      В Турции есть клиники, которые входят в топ-10 в мире по уровню технической оснащенности.
                    </p>
                  </div>
                  <div class="liv__item-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-4.jpg" alt="img">
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


      <div class="survey survey-treatment">
        <div class="container">
            <div class="survey__title">
              <?php the_field('napravleniya_shestoj_blok_zagolovok');?>
            </div>
            <div class="survey__inner">
                <div class="survey__item">
                    <p class="survey__item-text">
                      <?php the_field('napravleniya_shestoj_blok_tekst_odin');?>
                    </p>
                    <div class="survey__item-img survey__item-img--order">
                        <img src="<?php echo get_field('napravleniya_shestoj_blok_izobrazhenie_odin')['url'];?>" alt="img">
                    </div>
                </div>
                <div class="survey__item">
                    <div class="survey__item-img">
                        <img src="<?php echo get_field('napravleniya_shestoj_blok_izobrazhenie_dva')['url'];?>" alt="img">
                    </div>
                    <p class="survey__item-text">
                      <?php the_field('napravleniya_shestoj_blok_tekst_dva');?>
                    </p>
                </div>
                <div class="survey__item">
                    <p class="survey__item-text">
                      <?php the_field('napravleniya_shestoj_blok_tekst_tri');?>
                    </p>
                    <div class="survey__item-img survey__item-img--order">
                        <img src="<?php echo get_field('napravleniya_shestoj_blok_izobrazhenie_tri')['url'];?>" alt="img">
                    </div>
                </div>
                <div class="survey__item">
                    <div class="survey__item-img survey__item-img--order">
                        <img src="<?php echo get_field('napravleniya_shestoj_blok_izobrazhenie_chetyre')['url'];?>" alt="img">
                    </div>
                    <p class="survey__item-text">
                      <?php the_field('napravleniya_shestoj_blok_tekst_chetyre');?>
                    </p>
                </div>
            </div>
        </div>
      </div>

      <section class="directions">
        <div class="container">
          <div class="directions__title">Направления в Турции</div>
          <div class="directions__inner">
            <div class="directions-block">
    
              
                <?php
                  global $post;
                  $query = new WP_Query([
                    'post_per_page' => '30',
                    'post_type' => 'directions-turkey'
                  ]);
                  if($query->have_posts()){
                    while($query->have_posts()){
                      $query->the_post();
                ?>

                <li class="directions-block__item list-item">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url();?>" alt="img" class="directions-block__item-img">
                    <p class="directions-block__item-text"><?php the_title();?></p>
                  </a>
                </li>
                  <?php }
                  }
                      
                      else{
                          'Постов нет';
                      } 
                      wp_reset_postdata();
                  ?>
          
             
              
            </div>
            <button class="directions-block__btn">Показать ещё</button>
          </div>
    
          <div class="help">
            <div class="help__title">Как мы помогаем</div>
            <div class="help__inner">
              <div class="help__content">
                <p class="help__content-text">
                  Организуем лечение в лучших клиниках Турции. Беремся за самые сложные случаи, находим лучшие клиники и специалистов и заботимся обо всем до, во время и после лечения.
                </p>
                <strong class="help__content-text">
                  Вы можете самостоятельно выбрать клинику и врача или бесплатно проконсультироваться с нашими экспертами.
                </strong>
                <p class="help__content-text">
                  Наши врачи-эксперты перезвонят вам в течение дня, ознакомятся с документами и помогут подобрать лучшие опции лечения заболеваний в Турции. На запросы наших врачей отвечают лучшие мировые специалисты. После принятия предложения, мы организуем вашу поездку от А до Я — берем на себя перевод документов, общение с клиникой, помогаем в получении приглашения и визы, встречаем и предоставляем переводчика и трансфер.
                </p>
              </div>
              <div class="help__service">
                <div class="help__service-top">
                  <p class="help__service-top-text">
                    Персональные менеджеры и служба поддержки клиентов работают 
                    в режиме 24/7, помогая решать любые проблемы.                
                  </p>
                </div>
                <div class="help__service-bottom">
                  <div class="help__service-item">
                    <div class="help__service-item-title help__service-item-left">
                      Поддержка
                    </div>
                    <div class="help__service-item-text">
                      24 часа в сутки, семь дней 
                      в неделю, 365 дней в году
                    </div>
                  </div>
                  <div class="help__service-item">
                    <div class="help__service-item-title help__service-item-right">
                      Бесплатный сервис
                    </div>
                    <div class="help__service-item-text">
                      Вы оплачиваете услуги напрямую в клинике.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 


      <div class="medicine-liv-clinic">
        <div class="container">
            <div class="liv__box medicine-liv-clinic">
                <div class="liv__box-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv.jpg" alt="img">
                </div>
                <div class="liv__box-content">
                  <div class="liv__box-title">Клиника LIV</div>
                  <div class="liv__box-subtitle"> Стамбул, Турция</div>
                  <div class="liv__box-star">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-star.svg" alt="img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-star.svg" alt="img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-star.svg" alt="img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-star.svg" alt="img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/liv/liv-star.svg" alt="img">
                    <p class="liv__box-star-text">11 отзывов</p>
                  </div>
                  <p class="liv__box-text">
                    Госпиталь Лив с момента своего основания был пионером в области надежных и качественных медицинских услуг. Клиника занимает вершины рейтингов благодаря опытной команде врачей, современному оснащению и подходу, ориентированному на пациента. Больница ...
                  </p>
                  <p class="liv__box-desc">
                    <span>Ведущие направления:</span><br>
                    Онкология , Нейрохирургия
                  </p>
        
                  <div class="liv__box-bottom">
                    <button class="liv__box-btn">Связаться с клиникой</button>
                    <p class="liv__box-phone">
                      <span>+7 495 204 2313 (бесплатно)</span><br>
                      русскоязычный консультант
                    </p>
                  </div>
                </div>
              </div>
        </div>
      </div>


      <div class="heading-block-medicine">
        <div class="container">
            <div class="heading-block__inner heading-block-medicine__inner">
                <div class="heading-block__item">
                  <div class="heading-block__item-title">5 100 +</div>
                  <p class="heading-block__item-text heading-block-medicine__text">
                    <span>Пациентов</span>Пациентов ежегодно доверяют нам в выборе врача и организации лечения
                  </p>
                </div>
                <div class="heading-block__item">
                  <div class="heading-block__item-title">238</div>
                  <p class="heading-block__item-text  heading-block-medicine__text">
                    <span>Клиник</span> в среднем посещают наши пациенты каждый месяц
                  </p>
                </div>
                <div class="heading-block__item">
                  <div class="heading-block__item-title">478</div>
                  <p class="heading-block__item-text  heading-block-medicine__text">
                    <span>Врачей</span> 32 специализаций зарегистрировались в DMU в 2020 году в качестве экспертов
                  </p>
                </div>
                <div class="heading-block__item">
                    <div class="heading-block__item-title">102+</div>
                    <p class="heading-block__item-text  heading-block-medicine__text">
                       <span>Сотрудников</span> решают самые сложные задачи 24 часа в сутки, 7 дней в неделю
                    </p>
                  </div>
              </div>
        </div>
      </div>


      <div class="team">
        <div class="container">
          <div class="team__block">
            <div class="team__content">
              <div class="team__content-title">
                Почему сложно выбирать самому и лучше довериться профессионалам?
              </div>
              <p class="team__content-text">
                Многие клиники, предоставляя полный спектр услуг, имеют лучшую экспертизу только в нескольких областях медицины. Мы выявляем такие специализации и рекомендуем пациенту именно то учреждение, которое идеально подходит для лечения его заболевания.
              </p>
              <a href="#" class="team__content-link">Наша команда</a>
            </div>
            <div class="team__info">
              <div class="team__info-item">
                <div class="team__info-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/team-1.svg" alt="img">
                </div>
                <div class="team__info-box">
                  <div class="team__info-title"> Рейтинги, основанные на данных</div>
                  <p class="team__info-text">
                    Мы знаем, когда было обновлено оборудование в операционных, какое количество пациентов обслуживает одна медсестра и какие сертификаты имеют врачи отделения.
                  </p>
                </div>
              </div>
              <div class="team__info-item">
                <div class="team__info-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/team-2.svg" alt="img">
                </div>
                <div class="team__info-box">
                  <div class="team__info-title"> Отзывы реальных пациентов</div>
                  <p class="team__info-text">
                    Опыт пациентов — позитивный или негативный — очень важен для нас. Каждый отзыв мы рассматриваем совместно с клиниками и постоянно улучшаем наш сервис. 
                  </p>
                </div>
              </div>
              <div class="team__info-item">
                <div class="team__info-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/team-3.svg" alt="img">
                </div>
                <div class="team__info-box">
                  <div class="team__info-title">Глубокая интеграция с клиниками</div>
                  <p class="team__info-text">
                    Являясь крупнейшим в Европе сервисом, мы добиваемся лучших условий для наших пациентов в каждой клинике, с которой работаем. Например, приоритетной экстренной записи или особых условий размещения.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="dmu">
        <div class="container">
          <div class="dmu__title">
            Лечение за рубежом c DMU — это простоделю
          </div>
          <div class="dmu__subtitle">
            Ежегодно услугами DMU пользуются более 3.000 пациентов из стран СНГ, которым мы оказываем помощь и поддержку в любых вопросах 24 часа в сутки, 7 дней в неделю
          </div>
          <div class="dmu__block">
            <div class="dmu__item">
              <div class="dmu__number">01</div>
              <div class="dmu__content">
                <div class="dmu__content-title">Оставьте нам заявку</div>
                <p class="dmu__content-text">
                  Найдите самостоятельно 
                  на нашем сайте подходящую клинику/врача или закажите звонок, чтобы мы помогли вам с выбором.
                </p>
                <a href="#" class="dmu__content-phone">Заказать звонок </a>
              </div>
            </div>
            <div class="dmu__item">
              <div class="dmu__number">02</div>
              <div class="dmu__content">
                <div class="dmu__content-title"> Подбор клиники и врача</div>
                <p class="dmu__content-text">
                  Наши врачи досконально изучат вашу историю болезни, составят эпикриз и найдут лучшую клинику. Затем мы получим ответ выбранного специалиста, программу лечения и смету, которые согласуем с вами
                </p>
              </div>
            </div>
            <div class="dmu__item">
              <div class="dmu__number">03</div>
              <div class="dmu__content">
                <div class="dmu__content-title"> Организация поездки</div>
                <p class="dmu__content-text">
                  Мы организуем поездку и окажем полную поддержку 24/7 до, во время и после лечения
                </p>
                <a href="#" class="dmu__content-arrows">Как мы работаем</a>
              </div>
            </div>
          </div>
    
          <div class="dmu-bottom">
            <div class="dmu-bottom__left">
              <div class="dmu-bottom__left-title">
                Беремся за самые сложные случаи, находим лучшие клиники и специалистов, заботимся обо всем до, во время и после лечения
              </div>
              <p class="dmu-bottom__left-text">
                Наша команда в режиме 24/7 обеспечивает пациентов полным циклом услуг: от поиска лучшего врача до полного сопровождения во время пребывания в клинике. На всех этапах, даже по завершении лечения, мы содействуем в коммуникации между клиникой и пациентом, помогая сделать этот процесс максимально комфортным.
              </p>
              <a href="#" class="dmu-bottom__left-link">О нас</a>
            </div>
            <div class="dmu-bottom__right">
              <div class="dmu-bottom__item">
                <div class="dmu-bottom__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/dmu-1.svg" alt="img">
                </div>
                <div class="dmu-bottom__content">
                  <div class="dmu-bottom__content-title">Мы — оператор №1</div>
                  <p class="dmu-bottom__content-text">Эксклюзивный представитель и партнер клиник </p>
                </div>
              </div>
              <div class="dmu-bottom__item">
                <div class="dmu-bottom__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/dmu-2.svg" alt="img">
                </div>
                <div class="dmu-bottom__content">
                  <div class="dmu-bottom__content-title"> У нас нет комиссий</div>
                  <p class="dmu-bottom__content-text">
                    Вы не оплачиваете наши услуги по подбору и организации визита. Нас финансируют медицинские учреждения и федеральные программы.
                  </p>
                </div>
              </div>
              <div class="dmu-bottom__item">
                <div class="dmu-bottom__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/icon/dmu-3.svg" alt="img">
                </div>
                <div class="dmu-bottom__content">
                  <div class="dmu-bottom__content-title">Конфиденциальность</div>
                  <p class="dmu-bottom__content-text">
                    Неприкосновенность Ваших данных — одна из ключевых ценностей DMU. Узнайте больше о защите конфиденциальности.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="request-bottom request-bottom-treatment">
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
              <div class="heading__form">
                <?php echo do_shortcode('[contact-form-7 id="230" title="Форма"]')?>
              </div>
            </div>
          </div>
        </div>
      </div>
   </main>
<?php
get_footer();
?>