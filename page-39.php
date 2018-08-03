<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

		<div id="main">
			
            <div class="grid"> 
                <!-- This is a special responsive grid to give visitors *oomph* when they visit the website. You can see it from the CSS file as well, but it should 
                     be 2x4 at widths larger than 1000px, then 2x3 at the width range of 750px - 1000px, then 2x2 at the width range of 500px - 750px, and finally
                     2x1 at widths 500px and below. So, the first two pictures (from top to bottom order of the html) should be the most impactful, because they are the ones
                    which will be viewed at all screen sizes.-->
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
                <img src="./wp-content/themes/stand-out/assets/img/home/250x250.png">
            </div>
            <div class="description-background">
                <h1>WHO WE ARE</h1>
                <div class="description">
                    <p>
                        The NTU Welfare Services Club is one of the largest non-academic constituent clubs in NTU. Founded in 1985, it currently consists of 9 Regular Service Projects, 5 Special Projects and 4 Supporting Committees. 
                    </p>
                </div>
                <a href="./about-us">
                    <div class="button">
                            <span class="button__mask"></span>
                            <span class="button__text">Read more about us!</span>
                            <span class="button__text button__text--bis">Read more about us!</span>
                    </div>
                </a>
            </div>
            <div class="media-background">
                <div class="media">
                    <div class="facebook">
                        <div class="icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                        <!--<div id="fb-frame" class="fb-page" data-href="https://www.facebook.com/ntuwsc/" data-tabs="timeline" data-width="500" data-height="950px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ntuwsc/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ntuwsc/">NTU Welfare Services Club</a></blockquote></div>-->
                        <iframe id="fb-frame" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fntuwsc%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="950" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="instagram">
                        <div class="icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                        <?php echo do_shortcode('[instagram-feed]'); ?>
                    </div>
                </div>
            </div>

		</div>
	    
<?php get_footer(); ?>