	<?php $options = get_option('optimizare_options'); ?>
		<!--footer-->
		<div style="clear:both;"></div>
		<div id="footer">
			<div id="footer-content">
				<div class="footer-col">
					<h4>Contact Us</h4>
					<ul>
						<li><a href="mailto:alex@digital-campus.org">alex@digital-campus.org</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Resources</h4>
					<ul>
						<li><a href="https://play.google.com/store/apps/details?id=org.digitalcampus.mobile.learning">OppiaMobile Android App</a></li>
						<li><a href="https://oppiamobile.readthedocs.org/en/latest/">Documentation</a></li>
						<li><a href="https://downloads.digital-campus.org/OppiaMobile/virtualbox-images/">VirtualBox images</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Follow Us</h4>
					<ul>
						<li><a class="rss" href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/feed-icon-28x28.png"/>RSS</a></li>
						<li><a href="https://github.com/DigitalCampus/"><img src="<?php bloginfo('template_url'); ?>/images/github-icon.png"/>GitHub</a></li>
						<li><a href="https://twitter.com/digicampusteam" rel="nofollow"  title="Follow us on twitter."><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"/>@digicampusteam</a></li>
						<li><a href="http://www.youtube.com/user/digitalcampusteam" rel="nofollow"  title="Our YouTube channel."><img src="<?php bloginfo('template_url'); ?>/images/youtube.png"/>YouTube</a></li>
					</ul>
				</div>
				<div style="clear:both"></div>
				<div id="footer-info">		
					<div>OppiaMobile is developed and supported by <a href="http://digital-campus.org">Digital Campus</a></div>	
					<div>Digital Campus Ltd is a not-for-profit company registered in England & Wales (Company No. 7629751). &copy; <?php echo date('Y'); ?> <?php echo($options['footer_text']); ?></div>
				</div>
			</div>
		</div>
</div>
<!--wrapper end-->

	
	
	<?php wp_footer(); ?>
	
</body>

</html>
