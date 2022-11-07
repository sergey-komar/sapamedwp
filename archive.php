<?php 
get_header();
?>
        <div class="container">
        <h1 class="search_page">
          <?php
              if( is_category( ) ){
                echo ('Рубрика  ')  . get_queried_object()->name;
              }

              if( is_tag( ) ){
                echo ('Записи с меткой  ')  . get_queried_object()->name;
              }

              if( is_author( ) ){
                echo ('Записи автора  ')  . get_queried_object()->name;
              }

            ?>
          </h1>

          <div class="blog__content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                    <div class="blog__content-item">
                    <h1 class="single__title"><?php the_title();?></h1>
                        <img src="<?php the_post_thumbnail_url();?>" alt="images" class="blog__content-img">
                        <p class="blog__content-text">
                        <?php the_content();?>
                        </p>
                    </div>
                <?php endwhile; else: ?>
                    Записей нет.
                <?php endif; ?>    
                    
                </div>
        </div>
       
<?php
get_footer();
?>