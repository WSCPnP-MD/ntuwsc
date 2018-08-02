<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>


	<main>
		<div class="container">
			<div class="extra-navigator">
				<select class="committee-select">
					<option value="23">23rd Executive Committee</option>
					<option value="22">22nd Executive Committee</option>
					<option value="21">21st Executive Committee</option>
					<option value="20">20th Executive Committee</option>
				</select>
			</div>
			<div class = "committee-mobile-menu"></div>
			<div class = "committee-box">
				<div class="left-column">
					<div class="committee-menu">
						<ul>
							<li id="23rd" class="selected">
								<a>
									<figure>
										<img src="../wp-content/themes/stand-out/assets/img/23rd-exco.jpg">
										<figcaption>23rd Executive Committee</figcaption>							
									</figure>
								</a>
							</li>
							<li id="22nd">
								<a>
									<figure>
										<img src="../wp-content/themes/stand-out/assets/img/22nd-exco.jpg">
										<figcaption>22nd Executive Committee</figcaption>							
									</figure>
								</a>
							</li>
							<li id="21st">
								<a>
									<figure>
										<img src="../wp-content/themes/stand-out/assets/img/21st-exco.jpg">
										<figcaption>21st Executive Committee</figcaption>							
									</figure>
								</a>
							</li>
							<li id="20th">
								<a>
									<figure>
										<img src="../wp-content/themes/stand-out/assets/img/20th-exco.jpg">
										<figcaption>20th Executive Committee</figcaption>							
									</figure>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="right-column">
					<img id="main-image" src="../wp-content/themes/stand-out/assets/img/23rd-exco.jpg">
					<div class="wrapper">
						<div class="owl-carousel owl-theme">
							<figure class="item" id="president">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/president.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Jessica Lim Jiaying</figcaption>
									<figcaption class="holder-title">President</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="vp1">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vp1.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ong Jia Min Amanda</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="vp2">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vp2.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ong Yun Mei</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="hongensec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/hongensec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Jeline Chia Sin Ning</figcaption>
									<figcaption class="holder-title">Honorary General Secretary</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="honfinsec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/honfinsec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lim Xiao Xuan</figcaption>
									<figcaption class="holder-title">Honorary Financial Secretary</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="go">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/go.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lim Kang Wen</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Growth and Opportunities!</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="ir">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/ir.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Koh Kai Kheck, Jewelle</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Internal Relations</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>	
							<figure class="item" id="pnp">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/pnp.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Cheng Hui Jie</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Publicity and Publications</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="dc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/dc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ng Sze Zhen, Ivy</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Deaf Community)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="elders">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/elders.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Marco Goh</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Elders)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="foc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/foc.jpg">
								<div class="holder-info">
									<figcaption class="holder-name">Rohininaikar D/O Renganatha</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Friends of Children)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="id">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/id.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Khaw Jia Xin</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Intellectually Disabled)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="mh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/mh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Goi Shi Qi</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Mental Health)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="pc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/pc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Quek Shina</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Physically Challenged)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="vh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">David Lai Yong Kuang</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Visually Handicapped)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="youth">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/youth.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ong Hong Jun, Linus</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Youth)</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="curl">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/curl.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lee Zi Xuan</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Challenge UR Limits</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="cor">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/cor.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Shawn Fang</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Camp OutReach</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="igc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/igc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">See Zheng Hao</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Ignite Change</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="oh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/oh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Chan Kah May</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Operation Hope</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="ove">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/ove.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Marissa Tan Xuan Zhi</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Overseas Volunteering Expedition</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
							<figure class="item" id="vm">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vm.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ng Hai Ying Irene</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Volunteer Management</figcaption>
									<div class="mail-icon">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>    
<?php get_footer(); ?>