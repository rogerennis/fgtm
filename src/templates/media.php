<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Media
 */
?>

<?php get_header(); ?>
  <?php include('includes/page_header.php'); ?>
   
  <!-- LIVE SERVICE -->
  <div id="mediaService">
    <section class="media-service">
      <h3>Live Service</h3>
      <?php
        
        $d = getdate(date("U"));
        $day = "$d[weekday]";
        if ($day == "Sunday") :
        
      ?>
        <div class="ustream-container">
          <iframe width="100%" height="100%" 
  	 allowfullscreen webkitallowfullscreen src="http://www.ustream.tv/embed/4664505?html5ui&showtitle=false" frameborder="0">
          </iframe>
        </div>
      <?php else : ?>
      <!--
      <?php
        $mydate=getdate(date("U"));
        echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        echo "<br><br>";
        echo "$d[weekday], $d[month] $d[mday], $d[year]";
      ?>
      -->
        <h4>Watch the live service, Right here, every Sunday Morning.</h4>
      <?php endif ?>
    </section>
  </div>
  <!-- /LIVE SERVICE -->
   
  <!-- VIDEOS -->
  <div id="mediaVideos">
    <section class="media-videos">
      <div class="wrapper">
        <article class="media">
          <h3>Video Archives</h3>
          <div>
            <!--
            <?php echo do_shortcode("[embedyt] http://www.youtube.com/embed?layout=gallery&listType=playlist&list=UUD-7VHa4bAnfIqOs2bWvwmw[/embedyt]"); ?>
            -->
            </div>
        </article>
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
  <!-- /SERMONS -->

<?php get_footer(); ?>