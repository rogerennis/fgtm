<?php get_header(); ?>

	<main role="main" class="single">
	<!-- section -->
	<section>

  	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  
    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <figure><?php the_post_thumbnail(); // Fullsize image for the single post ?></figure>
      </a>
      <?php endif; ?>
      <!-- /post thumbnail -->
      
      <div class="wrapper">
        <!-- post title -->
        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <!-- /post title -->

        <!-- post details -->
        <span class="date">
          <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
            Posted on <?php the_date(); ?> <!-- <?php the_time(); ?> -->
          </time>
        </span>
        <!--
        <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
        <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
        -->
        <!-- /post details -->
    
        <?php the_content(); // Dynamic Content ?>
    
        <div class="post-tags"><?php the_tags( __( 'Tags: ', 'fgtm' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>
    
        <p class="post-category"><?php _e( 'Category(s): ', 'fgtm' ); the_category(', '); // Separated by commas ?></p>
    
        <!-- <p>< _e( 'written by ', 'html5blank' ); the_author(); ></p> -->
        <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
    
        <!-- comments_template(); -->
      </div>
    </article>
  		<!-- /article -->
  
  	<?php endwhile; ?>
  
  	<?php else: ?>
  
  		<!-- article -->
  		<article>
  
  			<h1><?php _e( 'Sorry, nothing to display.', 'fgtm' ); ?></h1>
  
  		</article>
  		<!-- /article -->
  
  	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
