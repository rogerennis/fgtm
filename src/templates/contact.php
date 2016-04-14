<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

  <?php include('includes/page_header.php'); ?>
   
  <div class="wrapper">
    <!-- ADDRESS -->
    <div id="contactAddress">
      <section class="contact-address">
        <article class="say-hi">
          <h3>Say Hi!</h3>
          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
        </article>
        
        <article class="address">
          <h4>Faith Gospel Tabernacle Ministries</h4>
          <address>
            142 Salvation Road<br>
            Brampton, Ontario<br>
            L7A 0W7
          </address>
          <a class="tel" href="tel:9054594673">Tel 905.459.4673</a>
          <h4>Office Hours</h4>
          <p>Monday – Friday: 9AM to 4:30PM</p>
        </article>
      </section>
    </div>
    <!-- /ADDRESS -->
     
    <!-- FORM -->
    <div id="contactAsk">
      <section class="contact-ask">
        <fieldset>
          <h3>Ask us anything</h3>
          <?php echo do_shortcode("[just_contact_form]"); ?>
        </fieldset>
      </section>
    </div>
  	<!-- /FORM -->
  </div>
   
  <!-- MAP -->
  <div id="contactMap">
    <section>
      <div>
        <?php echo do_shortcode("[huge_it_maps id='2']"); ?>
      </div>
<!--
      <div class="home-live-service-container">
        <a href="http://www.google.com" target="_blank" class="home-live-service-btn"><div>See it on google</div><span></span></a>
      </div>
-->
    </section>
  </div>
  <!-- /MAP -->

<?php get_footer(); ?>