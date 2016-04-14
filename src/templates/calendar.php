<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Calendar
 */
?>

<?php get_header(); ?>

   <?php include('includes/page_header.php'); ?>
   
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