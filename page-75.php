<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>
		<style>
			@media screen and (min-width: 1024px) {
				iframe {
					width:100%; 
					height:90vh; 
					border:2;
				}
			}
			@media screen and (max-width: 1024px) {
				iframe {
					position: absolute;
					display: block;
					width:100%; 
					height:100%; 
					border:none;
					padding-left:50px;
					left:auto;
					right:auto;
				}
				.sponsor, footer {
					position: relative;
					top: 1000px;
				}
			}
		</style>

		<div id="content">
			<iframe src="https://drive.google.com/embeddedfolderview?id=0BxPBcdTtdrNhWE5Mb2tQbDk3ZHc#grid"></iframe>
<!--		<h1><u>17th Executive Committee</u></h1>
            <iframe src="https://drive.google.com/embeddedfolderview?id=0BxPBcdTtdrNhRUViR0xYNVR6RzQ#grid" style="width:100%; height:90vh; border:2;"></iframe>
		<h1><u>18th Executive Committee</u></h1>
		<iframe src="https://drive.google.com/embeddedfolderview?id=0BxPBcdTtdrNhTE93eTlBOG0wTVU#grid" style="width:100%; height:90vh; border:2;"></iframe>
		-->
		</div>
	    
<?php get_footer(); ?>