<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

   <!-- HEADER -->
   <div class="header-container">
      <header class="header" role="banner">
         <div class="intro-page-image">
            <img src="http://lorempixel.com/1600/650/"/>
            
            <div>
               <h1>Contact</h1>
               <p>We'd love to hear from you!</p>
            </div>
         </div>
      </header>
   </div>
   <!-- /END HEADER -->
   
   <div class="wrapper">
      <!-- ADDRESS -->
      <div id="contactAddress">
         <section>
            <h2>Say Hi!</h2>
            <article>
               <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
            </article>
            <article>
               <h5>Faith Gospel Tabernacle Ministries</h5>
               <address>address & hours</address>
            </article>
         </section>
      </div>
      <!-- /ADDRESS -->
      
   	<!-- FORM -->
      <div id="contactAsk">
         <section>
            <h2>Ask us anything</h2>
            <fieldset>
               <form>form goes here</form>
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
         <div class="home-live-service-container">
            <a href="http://www.google.com" target="_blank" class="home-live-service-btn"><div>See it on google</div><span></span></a>
         </div>
      </section>
      </div>
   	<!-- /MAP -->

<?php get_footer(); ?>