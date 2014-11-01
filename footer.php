<footer>
  <div class="container clearfix">
    <h2 class="contactus">Contact Us</h2>

	<div class="contents foot-wrap">
		<div class="wrapper clearfix">
		<div class="map">
			<?php echo do_shortcode ("[ready_google_map id='1']"); ?>
			<!-- <img src="http://placehold.it/500x300" alt=""> -->
		</div><!-- /.map -->
	    <div class="info">
		    <h6 class="resto">The Green Door</h6>
			<p class="address">198 Main Street, Ottawa, K1S 1C6</p>
			<p class="phone"><i class="contacticon foot fa fa-phone"></i></i>(613) 234-9597</p>
			<p class="email"><i class="contacticon foot fa fa-envelope"></i></i>info@thegreendoor.ca</p>

		    <h6 class="hours">Hours</h6>
		    <p class="open">Monday: Closed</p>
			<p class="open">Tuesday to Sunday: 11am - 9pm</p>
			

			<img src="img/bagels.jpg" alt="">
				<div class="socialmediafooter">
				  <i class="single foot fa fa-twitter"></i>
				  <i class="single foot fa fa-facebook"></i>
				  <i class="single foot fa fa-instagram"></i>
				</div><!-- /.socialmedia -->
		</div><!-- /.info -->

		<div class="newsletter-signup">
			<p class="newsletter clearfix">Sign up for our newsletter</p>
			<div class="buttonoutside">
				<input type="email" name="email" class="formfield" placeholder="Enter your email address">
				<button class="signup"><a href="" class="signuplink">Sign Up</a></button>
			</div><!-- /.buttonoutside -->
	    </div><!-- /.newsletter-signup -->
	    </div> <!-- /.wrapper -->
	    <p class="credits">Template by Kristine Planche and Andrew Nguyen</p>

	</div><!-- /.contents -->
	
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>