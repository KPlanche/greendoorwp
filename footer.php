<footer class="mainfooter">
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
			<p class="phone"><i class="contacticon foot fa fa-phone"></i><a href="tel:6132349597">(613) 234-9597</a></p>
			<p class="email"><i class="contacticon foot fa fa-envelope"></i><a href="mailto:info@thegreendoor.ca">info@thegreendoor.ca</a></p>

		    <h6 class="hours">Hours</h6>
		    <p class="open">Monday: Closed</p>
			<p class="open">Tuesday to Sunday: 11am - 9pm</p>
			
			<?php //tripadvisor widget ?>

			<div class="widget">
				<div id="TA_certificateOfExcellence718" class="TA_certificateOfExcellence">
					<a target="_blank" href="http://www.tripadvisor.ca/Restaurant_Review-g155004-d704713-Reviews-Green_Door-Ottawa_Ontario.html"><img src="http://www.tripadvisor.com/img/cdsi/img2/awards/CoE2014_WidgetAsset-14348-2.png" alt="TripAdvisor" class="tripadvisor" id="CDSWIDCOELOGO"/></a>
				</div>
			</div><!-- /.widget -->
		
				<div class="socialmediafooter">
				  <a href="https://twitter.com/greendoorfood"><i class="single foot fa fa-twitter"></i></a>
				  <a href="https://www.facebook.com/TheGreenDoorVegetarianRestaurant"><i class="single foot fa fa-facebook"></i></a>
				  <a href="http://instagram.com/thegreendoorrestaurant"><i class="single foot fa fa-instagram"></i></a>
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