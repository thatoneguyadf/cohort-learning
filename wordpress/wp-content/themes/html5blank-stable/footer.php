	</div>
	<!-- /wrapper -->
	<nav class="navbar navbar-inverse">
		<div class="row">
			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

				<div class="sidebar-widget">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('html5-widgets')) ?>
				</div>

			</footer>
			<!-- /footer -->
		</div>
	</nav>


	<?php wp_footer(); ?>

	<!-- jquery && bootstrap scripts -->
	<script type="text/javascript" src="<?=get_template_directory_uri()?>/bower_components/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="<?=get_template_directory_uri()?>/bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<!-- /jquery && bootstrap scripts -->

	<!-- analytics -->
	<script>
	(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
	(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
	l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');<?=get_template_directory_uri()?>
	</script>

</body>
</html>
