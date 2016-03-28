<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Media
 */
?>

<?php get_header(); ?>

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
   
  <!-- LIVE SERVICE -->
  <div id="mediaService">
    <section class="media-service">
      <h3>Live Service</h3>
      <div class="ustream-container">
        <iframe width="100%" height="100%" 
	 allowfullscreen webkitallowfullscreen src="http://www.ustream.tv/embed/4664505?html5ui&showtitle=false" frameborder="0">
        </iframe>
      </div>
    </section>
  </div>
  <!-- /LIVE SERVICE -->
   
  <!-- VIDEOS -->
  <div id="mediaVideos">
    <section class="media-videos">
      <div class="wrapper">
        <article class="media">
          <h3>Videos</h3>
          <div><?php echo do_shortcode("[embedyt][/embedyt]"); ?></div>
        </article>
<!--
        <div class="btn-container">
          <a href="#" class="fgtm-btn">See the Channel<span></span></a>
        </div>
-->
      </div>
    </section>
  </div>
  <!-- /VIDEOS -->
   
  <!-- SERMONS -->
	<div class="wrapper">
    <main role="main">
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
    </main>
  </div>
  <!-- /SERMON -->

<?php get_footer(); ?>