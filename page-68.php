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
					<option value="25">25th Executive Committee</option>
					<option value="24">24th Executive Committee</option>
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
							<li id="25th" class="selected">
								<a>
									<figure>
										<img src="../wp-content/themes/stand-out/assets/img/25th-exco.jpg">
										<figcaption>25th Executive Committee</figcaption>							
									</figure>
								</a>
							</li>
							<li id="24th" class="selected">
								<a>
									<figure>
										<img src="../wp-content/themes/stand-out/assets/img/24th-exco.jpg">
										<figcaption>24th Executive Committee</figcaption>							
									</figure>
								</a>
							</li>
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
				<!--------------------------------------------------------------------------------------------->

				<div class="right-column">
					<div class="wrapper">
					<img id="main-image" src="../wp-content/themes/stand-out/assets/img/25th-exco.jpg">
					<div class="wrapper">
						<div class="owl-carousel owl-theme" id="25th-carousel">
						<figure class="item" id="president">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/president.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Iswari Joyce Kaliappan</figcaption>
									<figcaption class="holder-title">President</figcaption>
									
									<div class="mail-icon">
										<a href="mailto:wsc-president@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
									
								</div>
							</figure>
							<figure class="item" id="vp1">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/vp1.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Johan Ng Choon Herng</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>

									<div class="mail-icon">
										<a href="mailto:wsc-vicepresident1@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="vp2">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/vp2.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Smeetha Nair</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-vicepresident2@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="hongensec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/hongensec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Nadiya Nesseer</figcaption>
									<figcaption class="holder-title">Honorary General Secretary</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-hongensec@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="honfinsec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/honfinsec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ng Wee Hau, Zaphyr</figcaption>
									<figcaption class="holder-title">Honorary Financial Secretary</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-honfinsec@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="go">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/go.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Cheryl Choo Pei Lin</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Growth and Opportunities!</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-go@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="ir">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/ir.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Muhammad Teo Luqman</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Internal Relations</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-ir@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>	
							<figure class="item" id="pnp">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/pnp.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Jessie Tan Huixian</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Publicity and Publications</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-pnp@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="dc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/dc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Nurhidayah Bte Yazid</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Deaf Community)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspdc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="elders">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/elders.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Chua Shu Fen</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Elders)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspelders@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="foc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/foc.jpg">
								<div class="holder-info">
									<figcaption class="holder-name">Alexis Ong En Na</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Friends of Children)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspfoc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="id">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/id.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ong Ren Xian</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Intellectually Disabled)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspid@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="mh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/mh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Tsaur Sheng Jia</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Mental Health)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspmh@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="oh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/oh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Camilla Lim Xin Rong</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Operation Hope)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspoh@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="pc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/pc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Shawn Tang Zhen Kee</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Physically Challenged)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rsppc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="vh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/vh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Wong Yong</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Visually Handicapped)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspvh@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="youth">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/youth.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Wilson Xu Weixuan</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Youth)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspyouth@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="curl">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/curl.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Leow Tien Wee</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Challenge ur Limits</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-curl@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="cor">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/cor.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Jan Paolo Macapinlac Balagtas</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Camp OutReach</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-cor@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="igc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/igc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Janani D/O Tharrmaraja</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Ignite Change</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-igc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="ove">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/ove.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ho Zong Jin</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Overseas Volunteering Expedition</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-ove@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="vm">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/25th/vm.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ellie Lew Yi Ting</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Volunteer Management</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-vm@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>

						</div>




				<!--------------------------------------------------------------------------------------------->

						<div class="owl-carousel owl-theme" id="24th-carousel">
						<figure class="item" id="president">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/president.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Chan Kah May</figcaption>
									<figcaption class="holder-title">President</figcaption>
									
									<div class="mail-icon">
										<a href="mailto:wsc-president@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
									
								</div>
							</figure>
							<figure class="item" id="vp1">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/vp1.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Fang Shawn</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>

									<div class="mail-icon">
										<a href="mailto:wsc-vicepresident1@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="vp2">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/vp2.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Jeline Chia Sin Ning</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-vicepresident2@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="hongensec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/hongensec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lam Wei Han</figcaption>
									<figcaption class="holder-title">Honorary General Secretary</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-hongensec@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="honfinsec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/honfinsec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Chua Yin Yin</figcaption>
									<figcaption class="holder-title">Honorary Financial Secretary</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-honfinsec@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="go">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/go.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ng Choon Herng Johan</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Growth and Opportunities!</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-go@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="ir">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/ir.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Chua Beng Lee</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Internal Relations</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-ir@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>	
							<figure class="item" id="pnp">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/pnp.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lim Gu Ying Jaslin</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Publicity and Publications</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-pnp@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="dc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/dc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Yeo Khai Sern</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Deaf Community)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspdc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="elders">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/elders.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Wong Yee Kiet</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Elders)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspelders@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="foc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/foc.jpg">
								<div class="holder-info">
									<figcaption class="holder-name">Teoh Min Wei (Jimmy)</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Friends of Children)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspfoc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="id">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/id.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ang Ruizhu, Patricia</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Intellectually Disabled)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspid@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="mh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/mh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Iswari Joyce Kaliappan</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Mental Health)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspmh@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="oh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/oh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Smeetha Nair</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Operation Hope)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspoh@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="pc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/pc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Amelia Choo Shu Xian</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Physically Challenged)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rsppc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="vh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/vh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Seang Wei Wen (Jessica)</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Visually Handicapped)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspvh@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="youth">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/youth.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Tan Jia En</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Youth)</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-rspyouth@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="curl">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/curl.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">R Gandharuban</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Challenge ur Limits</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-curl@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="cor">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/cor.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Rachel Tok Shu Han</figcaption>
									<figcaption class="holder-title">Chairperson (Acting)</figcaption>
									<figcaption class="holder-portfolio">Camp OutReach</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-cor@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="igc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/igc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Tay Qi Ying Jasmine</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Ignite Change</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-igc@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="ove">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/ove.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Kok Suet Yin Shirleen</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Overseas Volunteering Expedition</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-ove@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>
							<figure class="item" id="vm">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/24th/vm.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lam RunHong, Darren</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Volunteer Management</figcaption>
									<div class="mail-icon">
										<a href="mailto:wsc-vm@e.ntu.edu.sg">
											<div class="mail-link">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
										</a>
									</div>
								</div>
							</figure>

						</div>


						<div class="owl-carousel owl-theme" id="23rd-carousel">
							<figure class="item" id="president">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/president.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Jessica Lim Jiaying</figcaption>
									<figcaption class="holder-title">President</figcaption>										
								</div>
							</figure>
							<figure class="item" id="vp1">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vp1.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ong Jia Min Amanda</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>
								</div>
							</figure>
							<figure class="item" id="vp2">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vp2.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ong Yun Mei</figcaption>
									<figcaption class="holder-title">Vice President</figcaption>
								</div>
							</figure>
							<figure class="item" id="hongensec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/hongensec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Jeline Chia Sin Ning</figcaption>
									<figcaption class="holder-title">Honorary General Secretary</figcaption>
								</div>
							</figure>
							<figure class="item" id="honfinsec">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/honfinsec.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lim Xiao Xuan</figcaption>
									<figcaption class="holder-title">Honorary Financial Secretary</figcaption>
								</div>
							</figure>
							<figure class="item" id="go">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/go.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lim Kang Wen</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Growth and Opportunities!</figcaption>
								</div>
							</figure>
							<figure class="item" id="ir">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/ir.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Koh Kai Kheck, Jewelle</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Internal Relations</figcaption>
								</div>
							</figure>	
							<figure class="item" id="pnp">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/pnp.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Cheng Hui Jie</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Publicity and Publications</figcaption>
								</div>
							</figure>
							<figure class="item" id="dc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/dc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ng Sze Zhen, Ivy</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Deaf Community)</figcaption>
								</div>
							</figure>
							<figure class="item" id="elders">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/elders.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Marco Goh</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Elders)</figcaption>
								</div>
							</figure>
							<figure class="item" id="foc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/foc.jpg">
								<div class="holder-info">
									<figcaption class="holder-name">Rohininaikar D/O Renganatha</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Friends of Children)</figcaption>
								</div>
							</figure>
							<figure class="item" id="id">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/id.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Khaw Jia Xin</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Intellectually Disabled)</figcaption>
								</div>
							</figure>
							<figure class="item" id="mh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/mh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Goi Shi Qi</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Mental Health)</figcaption>
								</div>
							</figure>
							<figure class="item" id="pc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/pc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Quek Shina</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Physically Challenged)</figcaption>
								</div>
							</figure>
							<figure class="item" id="vh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">David Lai Yong Kuang</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Visually Handicapped)</figcaption>
								</div>
							</figure>
							<figure class="item" id="youth">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/youth.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ong Hong Jun, Linus</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">RSP (Youth)</figcaption>
								</div>
							</figure>
							<figure class="item" id="curl">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/curl.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Lee Zi Xuan</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Challenge ur Limits</figcaption>
								</div>
							</figure>
							<figure class="item" id="cor">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/cor.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Shawn Fang</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Camp OutReach</figcaption>
								</div>
							</figure>
							<figure class="item" id="igc">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/igc.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">See Zheng Hao</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Ignite Change</figcaption>
								</div>
							</figure>
							<figure class="item" id="oh">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/oh.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Chan Kah May</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Operation Hope</figcaption>
								</div>
							</figure>
							<figure class="item" id="ove">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/ove.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Marissa Tan Xuan Zhi</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Overseas Volunteering Expedition</figcaption>
								</div>
							</figure>
							<figure class="item" id="vm">
								<img src="../wp-content/themes/stand-out/assets/img/owl-carousel/23rd/vm.jpg">
								<div class="holder-info"> 
									<figcaption class="holder-name">Ng Hai Ying Irene</figcaption>
									<figcaption class="holder-title">Chairperson</figcaption>
									<figcaption class="holder-portfolio">Volunteer Management</figcaption>
								</div>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>    
<?php get_footer(); ?>