<?php 
get_header();
?>
<div class="treatment">
    <div class="container">
      <div class="treatment__title">
       <?php the_field('zagolovok_doktora');?>
      </div>
     <div class="treatment__block">
      <div class="treatment__content">
        <p class="treatment__content-text">
            <?php the_field('tekst_doktora');?>
        </p>
      </div>
      <div class="treatment__img">
        <img src="<?php echo get_field('izobrazhenie_doktora')['url']?>" alt="img">
      </div>
     </div>

     <blockquote class="treatment__reviews">
      <p>
        <?php the_field('czitata_doktora');?>
      </p>
     </blockquote>
    </div>
  </div>

<?php
get_footer();
?>