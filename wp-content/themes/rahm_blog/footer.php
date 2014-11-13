<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

	<div class="footerIframe">
		<iframe src="http://rahmforchicago.herokuapp.com/footer" frameborder="0"></iframe> 
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn-history/r358/trunk/infobox/src/infobox.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/application.js"></script>
<script type="text/javascript">
	$(document).foundation();
</script>

</body>
</html>