<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: New Here
 */
?>

<?php get_header(); ?>
<!--    <?php get_template_part('includes/page-header'); ?> -->

   <!-- HEADER -->
   <div class="page-header-container">
      <header class="header" role="banner">
         <?php
            if (has_post_thumbnail()) {
                $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'pageHeader' );
                $thumbnail_url = $thumbnail_data[0];
            }
         ?>
         <div class="page-header" id="post-<?php the_ID(); ?>"style="background:url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;">
            <div class="img-overlay"></div>
         </div>
         <div class="heading">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <h1>
                  <?php the_title() ?>
               </h1>
               <?php the_content(); ?>
           	<?php endwhile; endif; ?>
         </div>
      </header>
   </div>
   <!-- /END HEADER -->
   
   <!-- WE BELIEVE -->
   <div id="newHereBelieve">
      <section class="newHere-believe-container">
         <div class="wrapper">
            <article class="believe">
               <h3>What we Believe</h3>
               <p>Faith Gospel Tabernacle Ministries is a non-denominational ministry dedicated to preaching the good news of the gospel of Jesus Christ.</p>

<p>We believe in the importance of signs and wonders in the life of the church today.</p>

<p>This was the pattern established by Jesus, who preached salvation, healed the sick, and delivered the oppressed; this was also carried out by the early church.</p>

<p>We are dependent on the Word of God (The Bible) for all we teach and preach; believing in the gifts and ministry of the Holy Spirit.</p>
            </article>
         </div>
      </section>
   </div>
   <!-- /WE BELIEVE -->
   
	<!-- SERVICE TIMES -->
   <div id="newHereServiceTimes">
      <section class="newHere-service-times">
         <div class="wrapper">
            <article class="service-times">
               <h3>Service Times</h3>
               
               <div class="time-container">
               	<div class="time-content">
                  	 <figure><img class="clock svg" title="Clock" src="<?php echo get_template_directory_uri(); ?>/img/icons/clock.svg" alt="Clock"/></figure>
                     <div class="first-time">
                        <p>10am</p>
                        <p>Sundays</p>
                     </div>
                     <div class="second-time">
                        <p>6:30pm</p>
                        <p>Sundays</p>
                     </div>
                     <div class="third-time">
                        <p>7:30pm</p>
                        <p>Wednesdays</p>
                     </div>
               	</div>
               </div>
            </article>
         </div>
      </section>
   </div>
	<!-- /SERVICE TIMES -->
   
   <!-- EXPERIENCE YOUTH -->
   <div id="newHereYouth">
      <section class="newHere-youth">
         <div class="wrapper">
            <article class="youth">
               <h3>Experience Youth</h3>
               <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
               <div class="nursery">Nursery</div>
               <div class="children">Children's Ministries</div>
               <div class="jr-youth">Jr Youth</div>
               <div class="young-adults">Young Adults</div>
            </article>
            <div class="btn-container">
               <a href="#" class="fgtm-btn">Explore Youth</a>
            </div>
         </div>
      </section>
   </div>
   <!-- /EXPERIENCE YOUTH -->

	<!-- CTA -->
   <div id="newHereCta">
      <section class="newHere-cta">
         <div class="wrapper">
            <article class="cta">
               <h3>Come Checkout an Event</h3>
               <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
            </article>
            <div class="btn-container">
               <a href="<?php echo get_template_directory_uri(); ?>/calendar" class="fgtm-btn">See FGTM Events</a>
            </div>
         </div>
   </div>
	<!-- /CTA -->

<?php get_footer(); ?>