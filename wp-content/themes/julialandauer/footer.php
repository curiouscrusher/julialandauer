<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package julialandauer
 */
?>

</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-footer__social">
		<ul>
			<li><a href="http://facebook.com/julialandauerracing" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt="facebook" /></a></li>
			<li><a href="http://twitter.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.svg" alt="twitter" /></a></li>
			<li><a href="http://instagram.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" alt="instagram" /></a></li>
			<li><a href="http://youtube.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.svg" alt="youtube" /></a></li>
			<li><a href="http://pinterest.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/pinterest.svg" alt="pinterest" /></a></li>
			<li><a href="https://www.linkedin.com/pub/julia-landauer/23/335/216" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.svg" alt="linkedin" /></a></li>
		</ul>
	</div>
	<hr class="site-footer__divider" />
	<div class="site-footer__copyright">
		<p>© <?php echo date('Y'); ?>. Julia Landauer Racing LLC. All Rights Reserved.</p>
	</div>
	<div class="site-footer__credits">
		<p>Design and Development by <a href="http://nateholland.site">Nate Holland</a></p>
	</div><!-- .site-footer -->

	<?php // GA Code ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-57240844-1', 'auto');
		ga('send', 'pageview');
	</script>
	
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
