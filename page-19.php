<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>
	<br>
	<div class="container">
		<div class="title-contact">Contact Us</div>
		<div class="row">
			<div class="column-2 divider-w">
				<!--Map-->
				<div id="map" class="map"></div>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqpwZMcidGyRiv7b0xAh51_2ZDoSMhs8s&callback=myMap"></script>
			</div>
			<div class="column-2">
			<!--fa-2x-->
						<a class="fab fa-facebook" href="https://www.facebook.com/ntuwsc/" target="_blank" ></a>
							<!--<i class="divider"></i>-->
						<a class="fab fa-instagram" href="https://www.instagram.com/ntuwsc/" target="_blank" ></a>	
							<!--<i class="divider"></i>-->
						<a class="far fa-envelope" href="mailto:wsc-hongensec@e.ntu.edu.sg"></a>
				<div class = "text-contactSize"> <!--style="padding:5px" --> 
					<p class="text-contact">For sponsorship and collaboration opportunities, please contact <a class = "ContactInfo" href="mailto:wsc-hongensec@e.ntu.edu.sg"><u>wsc-hongensec@e.ntu.edu.sg</u></a>
					</p>
					<!--<div class="h-divider"></div>-->
					<p class="text-contact">For contacting individual portfolios within WSC, please contact the respective officer holders at the <a class = "ContactInfo" href="../executive-committee"><u>Executive Committee page.</u></a> 
					 
					</p>
				</div>
			</div>
		</div>
	</div>
	   <br>
<?php get_footer(); ?>