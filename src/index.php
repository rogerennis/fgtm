<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Blog
 */
 
 //global $thumbnail_url;
?>

<?php get_header(); ?>
	
	<!-- HEADER -->
  <div class="page-header-container">
    <header class="header" role="banner">
      <?php
         if (has_post_thumbnail()) {
            //$page_for_posts_id = get_option( 'page_for_posts' );
            //echo $page_for_posts_id;
            //echo get_the_post_thumbnail($page_for_posts_id, 'large');
          $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'page_for_posts' ) ), 'pageHeader' );
          $thumbnail_url = $thumbnail_data[0];
         }
      ?>
      <div class="page-header" id="post-<?php the_ID(); ?>"style="background:linear-gradient( rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;">
        <div class="heading">
           <?php if( get_option('page_for_posts' ) ) : ?>
              <h1>
                 <?php echo apply_filters( 'the_title', get_page( get_option( 'page_for_posts' ) )->post_title ); ?>
              </h1>
              <?php echo apply_filters( 'the_content', get_post_field( 'post_content', get_option( 'page_for_posts' ) ) ); ?>
          	<?php endif; ?>
        </div>
      </div>
     </header>
  </div>
  <!-- /END HEADER -->

  <div id="aboutTheAuthor">
    <section class="about-the-author">
      <div class="wrapper">
        <article class="author-content">
          <figure><img src="<?php echo get_template_directory_uri(); ?>/img/leadership/john_christine_williamson.JPG" alt="Christine Williamson" /></figure>
          <div>
            <h3>Christine Williamson</h3>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>
        </article>
      </div>
    </section>
  </div>
  
  <div id="authorPosts">
    <section class="author-posts">
      <div class="wrapper">
        <?php get_template_part('loop'); ?>
      </div>
    </section>
  </div>
  <?php get_template_part('pagination'); ?>
  </div>

<?php get_footer(); ?>

