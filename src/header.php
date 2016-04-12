<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" keywords="bootstrap, church, brampton, fgtm, jesus" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>
	</head>
	<body <?php body_class(); ?>>

        <!-- nav -->
        <div id="nav-container">
        <nav role="navigation">
          <!-- LOGO -->
    			<div class="logo">
    				<a href="<?php echo home_url(); ?>">
              <!-- svg logo -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/fgtm_logo.svg" alt="Logo" class="logo-img">
    				</a>
    			</div>
    			<!-- /LOGO -->
<!--     			<label class="menu-copy" aria-label="Menu" >Menu</label> -->
    			<div class="outer-menu">
            <input class="checkbox-toggle" type="checkbox" />
        			<div class="hamburger">
                <div></div>
              </div>
    		      <?php fgtm_nav(); ?>
    			</div>
    		</nav>
        </div>
        <!-- /nav -->
