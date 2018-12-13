<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

		<div id="main">
			
            <div class="grid"> 
                <!-- This is a special responsive grid to give visitors *oomph* when they visit the website. You can see it from the CSS file as well, but it should 
                     be 2x4 at widths larger than 1000px, then 2x3 at the width range of 750px - 1000px, then 2x2 at the width range of 500px - 750px, and finally
                     2x1 at widths 500px and below. So, the first two pictures (from top to bottom order of the html) should be the most impactful, because they are the ones
                    which will be viewed at all screen sizes.-->
                <img src="./wp-content/themes/stand-out/assets/img/home/photo1.jpg">
                <img src="./wp-content/themes/stand-out/assets/img/home/photo2.jpg">
                <img src="./wp-content/themes/stand-out/assets/img/home/photo3.jpg">
                <img src="./wp-content/themes/stand-out/assets/img/home/photo4.jpg">
                <img src="./wp-content/themes/stand-out/assets/img/home/photo5.jpg">
                <img src="./wp-content/themes/stand-out/assets/img/home/photo6.jpg">
                <img src="./wp-content/themes/stand-out/assets/img/home/photo7.jpg">
                <img src="./wp-content/themes/stand-out/assets/img/home/photo8.jpg">
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
                        <!--<iframe id="fb-frame" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fntuwsc%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="950" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>-->
                        <?php 

                            $useragent=$_SERVER['HTTP_USER_AGENT'];
                            if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                                echo do_shortcode('[facebook-page-plugin href="ntuwsc/" width="300" height="750" cover="true" facepile="true" tabs="timeline" cta="false" small="false" adapt="true" link="true" linktext="" ]');
                            else
                                echo do_shortcode('[facebook-page-plugin href="ntuwsc/" width="750" height="750" cover="true" facepile="true" tabs="timeline" cta="false" small="false" adapt="true" link="true" linktext="" ]'); 
                        ?>    
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