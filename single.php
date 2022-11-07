<?php 
get_header();
?>

<main class="main">
    <div class="images building" style="background: url('<?php echo $portal_options['home_video101']['url'];?>') no-repeat center / cover">
        <div class="container">
        <h1 class="single__title"><?php the_title();?></h1>
        </div>
    </div>
    <section class="blog">
        <div class="container">
            <div class="blog__inner">
                <div class="blog__content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                    <div class="blog__content-item">
                       
                        <img src="<?php the_post_thumbnail_url();?>" alt="images" class="blog__content-img">
                        <p class="blog__content-text">
                        <?php the_content();?>
                        </p>
                    </div>
                <?php endwhile; else: ?>
                    Записей нет.
                <?php endif; ?>    
                    
                </div>
                <div class="blog__aside">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section>
</main>
           
<?php
get_footer();
?>