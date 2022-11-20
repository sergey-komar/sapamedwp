<?php
?>
<?php 
get_header();
?>
<div class="treatment">
    <div class="container">
      <div class="treatment__title">
       <?php the_field('imya_eksperta');?>
      </div>
     <div class="treatment__block">
      <div class="treatment__content">
        <p class="treatment__content-text">
            <?php the_field('tekst_eksperta');?>
        </p>
      </div>
      <div class="treatment__img">
        <img src="<?php echo get_field('izobrazhenie_eksperta')['url']?>" alt="img">
      </div>
     </div>

     <blockquote class="treatment__reviews">
      <p>
        <?php the_field('czitata_eksperta');?>
      </p>
     </blockquote>
    </div>
  </div>
<?php
get_footer();
?>