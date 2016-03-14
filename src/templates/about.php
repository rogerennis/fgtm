<?php 
   /**
 * Author: Roger Ennis | @roadene
 * Template Name: About
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
   
   <!-- MISSION -->
   <div id="aboutMission">
      <section class="about-mission">
         <div class="wrapper">
            <article class="mission">
               <h3>Mission Statement</h3>
               <p>To bring people to a maturing faith in Jesus Christ, through the preaching and teaching of the good news of the gospel. To establish them in prayer, bible reading, worship and fellowship in the house of the Lord, so that each and every ministry gifting will be productive.</p>
            </article>
         </div>
      </section>
   </div>
   <!-- /MISSION -->
   
   <!-- WE BELIEVE -->
   <div id="aboutBelieve">
      <section class="about-believe-container">
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
   
	<!-- LEADERSHIP -->
   <div id="aboutLeadership">
      <section class="about-leadership">
         <div class="wrapper">
            <!-- Leadership -->
            <div class="leadership-container">
               <article class="leadership">
                  <h3>Leadership</h3>
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/img/leadership/john_christine_williamson.JPG" alt="John & Christine Williamson" /></figure>
                  <p class="title">Founders & Senior Pastors</p>
                  <h4>Rev. John & Christine Williamson</h4>
                  <p>Our founding pastors (born in N. Ireland) have been prayerfully and lovingly shepherding our fellowship since 1984. They provide support, counsel, and encouragement to those who are in need. They are proud parents of four sons, and also have ten grandchildren.</p>
               </article>
               
               <article class="leadership">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/img/leadership/pastorBrianJag.jpg" alt="pastorBrianJag" /></figure>
                  <p class="title">Assistant Pastor</p>
                  <h4>Rev. Brian Jagnanan</h4>
                  <p>Pastor Brian has been preaching the Gospel for since 2003. Born on the Island of Trinidad and Tobago and migrated to Canada since 1991. As full time Assistant Pastor at FGTM my role is preaching, teaching, praying and interceding on behalf of others. Pastor Brian is married with two beautiful children.</p>
               </article>
               
               <article class="leadership">
                  <figure><img src="#" /></figure>
                  <p class="title">Youth Leaders</p>
                  <h4>Delando & Nadine Henry</h4>
                  <p>Delando & Nadine Henry are originally from Kingston, Jamaica. They have been youth and camp leaders at their church there for many years. They are proud parents of 3 children. Both Delando and Nadine play vital roles in guiding our church youth.</p>
               </article>
               
               <article class="leadership">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/img/leadership/carolCarey.jpg" alt="carolCarey" /></figure>
                  <p class="title">Church Secretary</p>
                  <h4>Carol Carey</h4>
                  <p>If you are inquiring about our fellowship, IF you are looking for a church, IF you need spiritual assistance, prayer and support, <strong>call (905) 459-HOPE</strong>. You will be greeted by a friendly voice and a caring spirit. Drop by or call to make an appointment. Regular office hours, 9:00 am -5:30 pm, Monday-Friday.</p>
               </article>
               
               <article class="leadership">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/img/leadership/pastorRiptonRamsingh.jpg" alt="pastorRiptonRamsingh" /></figure>
                  <p class="title">Pastor</p>
                  <h4>Ripton Ramsingh</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
               </article>
               
               <article class="leadership">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/img/leadership/pastorMonicaMills.jpg" alt="pastorMonicaMills" /></figure>
                  <p class="title">Pastor</p>
                  <h4>Monica Mills</h4>
                  <p>Born in Jamaica she has been in canada for Forty years. she is a wife, mother of four children and one grandchild. Since 1997 she has dedicated her life to the ministry of Jesus Christ. Her personal testimonies of God’s miracle and healing power is an encouragement to all. She is a preacher and a speaker, and is passionate about the Ladies Ministry. She has been with Faith Gospel Tabernacle Ministries for ten years.</p>
               </article>
            </div>
            
            <!-- Ministry Leadership -->
            <div class="about-ministry-leadership">
               
                  <div class="ministry-leadership-container">
                     <article class="ministry-leadership">
                        <h3>Ministry Leadership</h3>
                        <figure><img src="#" /></figure>
                        <p>title</p>
                        <h4>Name 1</h4>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                     </article>
                     
                     <article class="ministry-leadership">
                        <figure><img src="#" /></figure>
                        <p>title</p>
                        <h4>Name 2</h4>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                     </article>
                  </div>
               
            </div>
         </div>
      </section>
   </div>
	<!-- /LEADERSHIP -->
   
   <!-- MINISTRIES -->
   <div id="aboutMinistries">
      <section class="about-ministries">
         <div class="wrapper">
            <article class="ministries">
               <h3>Ministries</h3>
               <div class="ministry">
                  <h4>Christine's Corner</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  <a href="#">go ></a>
               </div>
               
               <div class="ministry">
                  <h4>Worship</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  <a href="#">go ></a>
               </div>
               
               <div class="ministry">
                  <h4>Ladies Program</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  <a href="#">go ></a>
               </div>
               
               <div class="ministry">
                  <h4>Hospitality & Ushers</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  <a href="#">go ></a>
               </div>
               
               <div class="ministry">
                  <h4>Bible Study</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  <a href="#">go ></a>
               </div>
               
               <div class="ministry">
                  <h4>Prayer</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  <a href="#">go ></a>
               </div>
               
               <div class="ministry">
                  <h4>Youth</h4>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.</p>
                  <a href="#">go ></a>
               </div>
            </article>
         </div>
      </section>
   </div>
   <!-- /MINISTRIES -->

<?php get_footer(); ?>