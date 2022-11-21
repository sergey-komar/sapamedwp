<?php
/*
 Template name: Врачи
 */
?>
<?php
get_header();
?>
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


  <section class="slider">
    <div class="container">
      <div class="slider-reviews">

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
  </section>

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

  <div class="request">
    <div class="container">
      <div class="request__block">
        <div class="request__block-content">
          <div class="request__block-title">
            Оставьте заявку на лечение или задайте вопрос
          </div>
          <p class="request__block-text">
            Мы сотрудничаем с десятками медицинских учреждений Беларуси, поэтому можем посоветовать те клиники, где есть самое лучшее оборудование. Чтобы вы заранее знали, что вас ждет и каковы перспективы лечения, мы организуем заочную консультацию врача.
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
              <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/dmu-1.svg" alt="img">
            </div>
            <div class="dmu-bottom__content">
              <div class="dmu-bottom__content-title">Мы — оператор №1</div>
              <p class="dmu-bottom__content-text">Эксклюзивный представитель и партнер клиник </p>
            </div>
          </div>
          <div class="dmu-bottom__item">
            <div class="dmu-bottom__img">
              <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/dmu-2.svg" alt="img">
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
              <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/dmu-3.svg" alt="img">
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


    <div class="request-bottom">
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

<?php
get_footer();
?>