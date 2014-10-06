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

	<footer id="colophon">
		<div class="row">
			<div class="small-4 medium-3 columns logo">
				<div>
					<img src="assets/logo-footer.png"/>
				</div>
			</div>
				<div class="small-4 medium-3 columns">
				<h5>TAKE ACTION</h5>
				<ul>
					<li>
						<a href="#">SIGN UP</a>
					</li>
					<li>
						<a href="#">SHARE YOUR STORY</a>
					</li>
					<li>
						<a href="#">SEE PROGRESS IN YOUR NEIGHBORHOOD</a>
					</li>
					<li>
						<a href="#">DONATE</a>
					</li>
				</ul>
			</div>
			<div class="small-4 medium-3 columns">
				<h5>FACTS</h5>
				<ul>
					<li>
						<a href="#">ABOUT</a>
					</li>
					<li>
						<a href="#">NEIGHBORHOOD STORIES</a>
					</li>
					<li>
						<a href="#">PARKS</a>
					</li>
					<li>
						<a href="#">INFRASTRUCTURE</a>
					</li>
					<li>
						<a href="#">ECONOMIC DEVELOPMENT</a>
					</li>
					<li>
						<a href="#">ENVIRONMENT</a>
					</li>
					<li>
						<a href="#">EDUCATION</a>
					</li>
				</ul>
			</div>
			<div class="small-4 medium-3 columns">
				<h5>LATEST</h5>
				<ul>
					<li>
						<a href="#">BLOG</a>
					</li>
					<li>
						<a href="#">LIKE US ON FACEBOOK</a>
					</li>
					<li>
						<a href="#">FOLLOW US ON TWITTER</a>
					</li>
				</ul>
				<div class="footerSignup">
					<h5>Lorem Ipsum Something</h5>
					<form>
						<input type="text" placeholder="Email" name="signUpEmail"/>
						<input type="text" placeholder="Zip code" name="signUpZip"/>
						<button>Sign up</button>
					</form>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn-history/r358/trunk/infobox/src/infobox.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/rahm_blog/js/application.js"></script>
<script type="text/javascript">
	$(document).foundation();
</script>

</body>
</html>