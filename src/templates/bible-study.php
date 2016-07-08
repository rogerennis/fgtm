<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: Bible Study
 */
?>

<?php get_header(); ?>

  <?php include('includes/page_header.php'); ?>
  
  <!-- BIBLE STUDY-->
  <div id="bibleStudy">
    <section class="bible-study-container">
      <div class="wrapper">
        <article class="bible-study">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ministries/bibleStudy_ministryHeader.jpg" alt="Bible Study image" />
          </figure>
          <h3>Bible Study</h3>
          <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.</p>
          <h4>Classes</h4>
          <!-- date -->
          <ul class="date-age-location">
            <li>Every Thursday at 7PM</li>
          </ul>
          
          <!-- classes -->
          <ul class="classes">
            <li>
              <div>Beginners</div>
              <ul>
                <li>dfsdfsdfsdfsdf</li>
              </ul>
            </li>
            <li>
              <div>Advanced 01</div>
              <ul>
                <li>dfsdfsdfsdf</li>
              </ul>
            </li>
            <li>
              <div>Advanced 02</div>
              <ul>
                <li>asasdasdasdasd</li>
              </ul>
            </li>
          </ul>
        </article>
      </div>
    </section>
  </div>
  <!-- BIBLE STUDY -->
  
<?php get_footer(); ?>