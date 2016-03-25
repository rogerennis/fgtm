<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Giving
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
   
  <!-- PAYPAL -->
  <div id="givingPaypal">
    <section class="giving-paypal">
      <div class="wrapper">
        <article class="paypal">
          <h3>Paypal</h3>
          
          <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" class="paypal-logo" border="0" alt="PayPal Logo">
          
          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_self">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="FJZPMCZZATPJL">
            <input type="submit" name="submit" value="Give with paypal" border="0" alt="PayPal - The safer, easier way to pay online!" class="fgtm-btn" />
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </article>
      </div>
    </section>
  </div>
  <!-- /PAYPAL -->
   
  <!-- DONATE -->
  <div id="givingDonate">
    <section class="giving-donate">
      <div class="wrapper">
        <article class="donate">
          <h3>Moneris</h3>
          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
          <div class="btn-container">
            <a href="#" target="_blank" class="fgtm-btn">Give with Moneris</a>
          </div>
        </article>
      </div>
    </section>
  </div>
  <!-- /DONATE -->

<?php get_footer(); ?>