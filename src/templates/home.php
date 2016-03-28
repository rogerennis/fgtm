<?php
/**
 * Author: Roger Ennis | @roadene
 * Template Name: Home
 */
?>

<?php get_header(); ?>

   <!-- HEADER -->
   <div class="header-container">
      <header class="header" role="banner">
         <div class="hero-unit-image">
            <div class="img-overlay"></div>
         </div>
         <div class="full-logo">
             <figure><img src="<?php echo get_template_directory_uri(); ?>/img/fgtm_logo_white_FINAL.svg" alt="Faith Gospel Tabernacle Ministries" class="full-logo-img"></figure>
         </div>
         <div class="hero-call-to-action">
            <div class="new-here-link"><a href="<?php echo get_template_directory_uri(); ?>/new-here">New here? See what to expect...</a></div>
            <div class="see-more">See More</div>
            <div class="social-media">
               <a href="http://www.facebook.com/">
                   <figure><img class="facebook svg" title="Facebook" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook"/></figure>
               </a>
               <a href="http://www.twitter.com/">
                   <figure><img class="twitter svg" title="Twitter" src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter"/></figure>
               </a>
               <a href="http://www.instagram.com/">
                   <figure><img class="insta svg" title="Instagram" src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram"/></figure>
               </a>
               <a href="https://www.youtube.com/channel/UCD-7VHa4bAnfIqOs2bWvwmw">
                   <figure><img class="youtube svg" title="Youtube" src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube.svg" alt="Youtube"/></figure>
               </a>
            </div>
         </div>
      </header>
   </div>
   
   <div class="home-live-service-container">
      <a href="<?php echo get_template_directory_uri(); ?>/media#mediaService" target="_self" class="home-live-service-btn"><div>Watch the live service</div><span></span></a>
   </div>
   <!-- /END HEADER -->



   <!-- wrapper -->
   <div class="wrapper">
   	<main role="main">

   		<!-- EVENTS & SERVICE TIMES -->
         <div id="homeEvents">
            <section class="home-events">
               
               <article class="event">
                   <h3>Events</h3>
                  
                  <?php
                  $args = array(
                     'post_type' => 'events',
                     'orderby' => 'menu_order',
                     'posts_per_page' => 3 // -1 gets all events
                  );
                  
                  $events = new WP_Query( $args );
                  
                  if( $events->have_posts() ) : ?>
                     <div class="flexslider">
                        <ul class="slides">
                        <?php while( $events->have_posts() ) : $events->the_post(); ?>
                           <li>
                              <?php the_post_thumbnail(' events-home '); ?>
                              <?php the_content(); ?>
                           </li>
                        <?php endwhile; ?>
                        </ul>
                     </div>
                  <?php endif; ?>
               </article>

               <article class="times">
                  <h3>Service Times</h3>
                  
                  <div class="services">
                     <div class="service">
                        <div class="service-time">
                           <h4>Sundays</h4>
                           <h4>10am | 6:30pm</h4>
                        </div>
   
                        <h5>Details</h5>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                     </div>

                     <div class="service">
                        <div class="service-time">
                           <h4>Wednesdays</h4>
                           <h4>7:30pm</h4>
                        </div>
                     
                        <h5>Details</h5>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                     </div>
                  </div>
               </article>
            </section>
         </div>
   		<!-- /EVENTS & SERVICE TIMES -->
         
   	</main>
   </div>
   
	<!-- YOUTH -->
   <div id="homeYouth">
      <section class="home-youth">
         
         <div class="wrapper">
            <main role="main">
         
               <article class="nursery">
                  <h3>Nursery</h3>
                  
                  <?php 
                  $args = array(
                     'post_type'    => 'nursery-home',
                     'post_per_page' => 1
                  );
                  
                  $nursery = new WP_Query( $args );
                  
                  if ( $nursery->have_posts() ) : ?>
                     <ul>
                        <?php while( $nursery->have_posts() ) : $nursery->the_post(); ?>
                        <li>
                           <?php the_post_thumbnail(' nursery-home ') ?>
                           <?php the_content(); ?>
                        </li>
                        <?php endwhile ?>
                     </ul>
                  <?php endif ?>

                  <div class="btn-container">
                     <a href="#" class="fgtm-btn">See the Nursery</a>
                  </div>
               </article>

               <article class="youth">
                  <h3>Youth</h3>
                  
                  <?php
                  $args = array(
                     'post_type'    => 'youth-home',
                     'post_per_page' => 1
                  );
                  
                  $youth = new WP_Query( $args );
                  
                  if ( $youth->have_posts() ) : ?>
                     <ul>
                        <?php while( $youth->have_posts() ) : $youth->the_post(); ?>
                        <li>
                           <?php the_post_thumbnail(' youth-home ') ?>
                           <?php the_content() ?>
                        </li>
                        <?php endwhile ?>
                     </ul>
                  <?php endif ?>
                  
                  <div class="btn-container">
                     <a href="#" class="fgtm-btn">Check out the Youth</a>
                  <div>
               </article>
         
            </main>
         </div>
         
      </section>
   </div>
	<!-- /YOUTH -->
   		
  <div class="wrapper">
    <main role="main">
      <!-- SERMONS -->
      <div id="homeSermon">
        <section class="home-sermon">
          <div class="sermons">
            <h3>Sermons</h3>
            <iframe width="100%" height="400" download="true" show_artwork="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player?url=http%3A%2F%2Fsoundcloud.com%2Ffaith-gospel-tabernacle&amp;color=aa1e25&amp;auto_play=false&show_comments=true&show_user=true&show_reposts=true"></iframe>
          </div>
          <div class="btn-container">
            <a href="#" class="fgtm-btn">Explore more media</a>
          </div>
        </section>
      </div>
      <!-- /SERMON -->
    </main>
  </div>
   
	<!-- MAP -->
   <div id="homeMap">
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