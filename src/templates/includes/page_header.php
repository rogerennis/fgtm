<!-- HEADER -->
<div class="page-header-container">
  <header class="header" role="banner">
    <?php
       if (has_post_thumbnail()) {
        $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'pageHeader' );
        $thumbnail_url = $thumbnail_data[0];
       }
    ?>
    <div class="page-header" id="post-<?php the_ID(); ?>"style="background:linear-gradient( rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;">
      <div class="heading">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1>
               <?php the_title() ?>
            </h1>
            <?php the_content(); ?>
        	<?php endwhile; endif; ?>
      </div>
    </div>
    
   </header>
</div>
<!-- /END HEADER -->
<?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>