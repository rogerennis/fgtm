      </div>
		<!-- /wrapper -->
		
		<!-- footer -->
		<div id="footer-container">
			<footer class="footer" role="contentinfo">

                <!-- Social Media -->
                    <aside class="full-width-widget" role="complementary">
                        <div>
                            <a href="http://www.facebook.com/">
                                <img class="facebook svg" title="Facebook" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook"/>
                            </a>
                            <a href="http://www.twitter.com/">
                                <img class="twitter svg" title="Twitter" src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter"/>
                            </a>
                            <a href="http://www.instagram.com/">
                                <img class="insta svg" title="Instagram" src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram"/>
                            </a>
                            <a href="https://www.youtube.com/channel/UCD-7VHa4bAnfIqOs2bWvwmw">
                                <img class="youtube svg" title="Youtube" src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube.svg" alt="Youtube"/>
                            </a>
                        </div>
                        
                        <!--
                    	<?php
                        	if(is_active_sidebar('first-footer-widget-area')) {
                        ?>
                            <?php dynamic_sidebar('first-footer-widget-area'); ?>
                        <?php
                            } 
                        ?>
                        -->
                    </aside>
                
                <!-- /Social Media -->
                
                
				<!-- LOGO -->
    			<div class="footer-logo">
    				<a href="<?php echo home_url(); ?>">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fgtm_logo.svg" alt="Logo" class="logo-img">
    				</a>
    			</div>
    			<!-- /LOGO -->
    			
    			<p>140 Salvation Road, Brampton ON L7A 0W7</p>
				
				<!-- copyright -->
				<p class="copyright">
					&copy;
					<?php echo date('Y'); ?>
					Copyright <?php bloginfo('name'); ?> <br><br>
					<a href="//www.rogerennis.com" title="Roger Ennis"> Designed &amp; Developed: Roger Ennis</a>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->
        </div>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>

<!--
<div>
    <a href="http://www.facebook.com/">
        <img title="Facebook" src="/img/icons/facebook.svg" alt="Facebook"/>
    </a>
    <a href="http://www.twitter.com/">
        <img title="Twitter" src="/img/icons/twitter.svg" alt="Twitter"/>
    </a>
    <a href="http://www.instagram.com/">
        <img title="Instagram" src="/img/icons/instagram.svg" alt="Instagram"/>
    </a>
    <a href="https://www.youtube.com/channel/UCD-7VHa4bAnfIqOs2bWvwmw">
        <img title="Youtube" src="/img/icons/youtube.svg" alt="Youtube"/>
    </a>
</div>
-->
