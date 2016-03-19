<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Calendar
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
   
   <!-- CALENDAR -->
   <div id="calendar">
    <section class="calendar-container">
      <div class="wrapper">
        <article class="calendar">
           <div><?php echo do_shortcode("[add_eventon show_et_ft_img='yes' event_order='ASC' ft_event_priority='yes' hide_past='yes' ux_val='0' evc_open='yes' exp_so='no' accord='yes' tiles='no' ]
"); ?></div>
        </article>
      </div>
    </section>
   </div>
   <!-- /CALENDAR -->

<?php get_footer(); ?>