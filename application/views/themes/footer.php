<?php
?>
				<!-- Footer Section -->
				<footer id="footer-section" class="main-container pull-right"> 
					
					
					

					<div class="copyrights "> 

						&copy; <a href="#">Foody</a>  2015 - All Rights Reserved <span class="v-line"></span> Developed by <a href="http://jeweltheme.com">Jewel Theme</a>

					</div><!-- /.copyrights -->
				</footer><!-- /#footer-section -->
				<!-- Footer Section End -->


			</div><!-- /.row --> 
		</div><!-- /.container -->  

		<!-- Include jquery.min.js plugin -->
		<script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.0.min.js"></script>

		<!-- Include JavaScript Plugins -->
		<script src="<?php echo base_url(); ?>/assets/js/plugins.js"></script>

		<!-- Include jquery.parallax.js Plugins -->
		<script src="<?php echo base_url(); ?>/assets/js/jquery.parallax.js"></script> 

		<!-- Include JavaScript Functions -->
		<script src="<?php echo base_url(); ?>/assets/js/functions.js"></script>

		<!-- Google Maps Script  
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
-->
		<!-- Gmap3.js For Static Maps -->
		<script src="<?php echo base_url(); ?>/assets/js/gmap3.js"></script> 

		<script src="<?php echo base_url(); ?>/assets/js/main.js"></script> 


		<script type="text/javascript"> 


			/*----------- Google Map - with support of gmaps.js ----------------*/

			function isMobile() { 
				return ('ontouchstart' in document.documentElement);
			}

			function init_gmap() {
				if ( typeof google == 'undefined' ) return;
				var options = {
					center: [53.599339, 10.172954],
					zoom: 15,
					mapTypeControl: true,
					mapTypeControlOptions: {
						style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
					},
					navigationControl: true,
					scrollwheel: false,
					streetViewControl: true
				}

				if (isMobile()) {
					options.draggable = false;
				}

				$('#googleMaps').gmap3({
					map: {
						options: options
					},
					marker: {
						latLng: [53.599339, 10.172954],
						options: { icon: 'assets/images/mapicon.png' }
					}
				});
			}

			init_gmap();




			jQuery(document).ready(function($) {
				"use strict";

				/*---------------------- Current Menu Item -------------------------*/
				$('#main-menu #headernavigation').onePageNav({
					currentClass: 'active',
					changeHash: false,
					scrollSpeed: 750,
					scrollThreshold: 0.5,
					scrollOffset: 0,
					filter: ':not(.sub-menu a, .not-in-home)',
					easing: 'swing'
				}); 
				
			});
		// document ready function End
		
		$("#contact-form").on("submit", function(e){
			e.preventDefault();
			$this = $(this);
			$.ajax({
				type: "POST",
				url: $this.attr('action'),
				data: $this.serialize(),
				success : function(){
					alert('Message Sent Successfully');
				}
			});
		});

	</script>
</body>
</html>