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
				<div>
					<!--Social Media-->
					<a href="https://www.facebook.com/ntuwsc/" class="fab fa-facebook " style="font-size: 35px"></a>
					<i class="divider"></i>
					<a href="https://www.instagram.com/ntuwsc/" class="fab fa-instagram" style="font-size: 35px"></a>
					<i class="divider"></i>
					<a href="mailto:wsc-hongensec@e.ntu.edu.sg" class="far fa-envelope" style="font-size: 35px"></a>
				</div>
				<div style="padding:5px"> 
					<p class="text-contact">For sponsorship and collaboration opportunities,
					please contact <a href="mailto:wsc-hongensec@e.ntu.edu.sg">wsc-hongensec@e.ntu.edu.sg</a></p>
					<div class="h-divider"></div>
					<p class="text-contact">For contacting individual portfolios, please contact individual office holders at the 
					<a href="../executive-committee">Executive Committee</a> page.</p>
				</div>
			</div>
		</div>
	</div>
	   <br>
<?php get_footer(); ?>