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
            <img src="<?php echo get_template_directory_uri(); ?>/img/fgtm_logo_white_FINAL.svg" alt="Faith Gospel Tabernacle Ministries" class="full-logo-img">
         </div>
         <div class="hero-call-to-action">
            <div class="new-here-link"><a href=<?php echo get_template_directory_uri(); ?>/new-here>new here?</div>
            <div class="see-more"></div>
            <div class="social-media"></div>
         </div>
      </header>
   </div>
   
   <div class="clear"></div>
   
   <div class="home-live-service-container">
      <a href="http://www.google.com" target="_blank" class="home-live-service-btn"><div>Watch the live service</div><span></span></a>
   </div>
   <!-- /END HEADER -->


   
   <!-- wrapper -->
   <div class="wrapper">
   	<main role="main">
   		
   		<!-- EVENTS & SERVICE TIMES -->
         <div id="homeEvents">
            <section>
               <article>
                  <h2>Events</h2>
                  <ul>
                     <li>homepage event image 1</li>
                     <li>homepage event image 2</li>
                     <li>homepage event image 3</li>
                  </ul>
                  
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
               </article>
               
               <article>
                  <h2>Service Times</h2>
                  <div>
                     <h3>Sundays</h3>
                     <h3>10am | 6:30pm</h3>
                     
                     <h4>Details</h4>
                     <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  </div>
                  
                  <div>
                     <h3>Wednesdays</h3>
                     <h3>7:30pm</h3>
                     
                     <h4>Details</h4>
                     <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  </div>
               </article>
            </section>
         </div>
   		<!-- /EVENTS & SERVICE TIMES -->
   		
   </main>
   </div>
   <!-- /WRAPPER -->
   
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
   
   <!-- wrapper begin again-->
   <div class="wrapper">
   	<main role="main">

   		<!-- YOUTH -->
         <div id="homeYouth">
            <section>
               <article>
                  <h2>Nursery</h2>
                  <ul>
                     <li>Image from Nursery</li>
                  </ul>
                  
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  
                  <button>See the Nursery</button>
               </article>
               
               <article>
                  <h2>Youth</h2>
                  <ul>
                     <li>Image from Nursery</li>
                  </ul>
                  
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  
                  <button>See the Nursery</button>
               </article>
            </section>
         </div>
   		<!-- /YOUTH -->
   		
   		<!-- SERMONS -->
         <div id="homeSermon">
            <section>
               <div>
                  <iframe width="100%" height="400" download="true" show_artwork="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player?url=http%3A%2F%2Fsoundcloud.com%2Ffaith-gospel-tabernacle&amp;color=aa1e25&amp;auto_play=false&show_comments=true&show_user=true&show_reposts=true"></iframe>
               </div>
               <button>Explore more media</button>
            </section>
         </div>
   		<!-- /SERMON -->
   	</main>

<?php get_footer(); ?>