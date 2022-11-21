<?php
/*
 Template name: Контакты
 */
?>
<?php
get_header();
?>
<main>
  <section class="contact">
    <div class="container">
        <h1 class="contact__title">Контакты</h1>
        <div class="contact__inner">
            <div class="contact__block">
                <div class="contact__subtitle">
                <? the_field('tekst_v_kontaktah');?>
                </div>
                <div class="contact__box">
                    <div class="contact__box-content">
                        <div class="contact__box-content-address">
                            <span>Адрес:</span><br>
                            <? the_field('adres_v_kontaktah');?>
                        </div>
                        <a href="mailto:info@mail.com" class="contact__box-content-email">
                        <? the_field('pochta_v_kontaktah', 'option');?>
                        </a>
                        <div class="contact__box-content-time">
                            <span>Время работы:</span><br>
                            <? the_field('vremya_raboty_v_kontaktah');?>
                        </div>
                    </div>
                    <div class="contact__box-info">
                        <a href="tel:88005509491" class="contact__box-info-phone contact__box-info-phone--one">
                        <? the_field('telefon_dlya_stran_sng');?>
                        </a>
                        <p class="contact__box-info-text">
                            Телефон для стран СНГ
                        </p>
                        <a href="tel:4921197531560" class="contact__box-info-phone contact__box-info-phone--two"> 
                        <? the_field('telefon_dlya_konsultaczij');?>
                        </a>
                        <p class="contact__box-info-text">
                            Телефон для консультации
                        </p>
                        <div class="footer__item-social">
                            <a href="#" class="footer__item-social-link">
                              <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/contact-facebook.svg" alt="img">
                            </a>
                            <a href="#" class="footer__item-social-link">
                              <img src="<?php echo get_template_directory_uri()?>./assets/images/icon/contact-twitter.svg" alt="img">
                            </a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="contact__form">
                <div class="heading__form">
                    <?php echo do_shortcode('[contact-form-7 id="333" title="Страница контакты"]');?>
                  </div>
            </div>
        </div>
    </div>

    <div class="map">
        <div class="container">
            <iframe class="map-contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.510983369189!2d76.89336821571277!3d43.219745188368414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388368dd82180fd5%3A0x6e06b96c93ac2795!2z0JrQsNC30LDRhdGB0YLQsNC90YHQutC40Lkg0JzQtdC00LjRhtC40L3RgdC60LjQuSDQo9C90LjQstC10YDRgdC40YLQtdGCICLQktCo0J7QlyI!5e0!3m2!1sru!2sru!4v1666540545537!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>