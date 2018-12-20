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
		<div class= "overlay">
			<div class="overlayFN">

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="history">
					<h2> Our History </h2>
					<p class = "Hist_Head"> WSC had its humble beginnings in 1985 with a few portfolios and to date, we have 18 portfolios consisting of 
					</p>
					<ul class = "Hist_Sub">
						<li> 9 Regular Service Projects </li>
						<li> 5 Special Projects </li>
						<li> 4 Supporting Committees </li>
					</ul>
					<p class = "Hist_End" >
						 We cover an extensive range of service users benefitting from our programmes - the Deaf, elderly, underprivileged children, the intellectually disabled, patients troubled with mental issues, the physically challenged, the visually handicapped, youths and low income families as well as the overseas communities in need. In addition, our programmes are also targeted at different groups in the society - mainly NTU students, the public and volunteers from schools or tertiary institutions. It is our hope to continually evaluate our programmes and expand them to stay relevant to the changing needs of our service users. 
					</p>
					<!--<img src="../wp-content/themes/stand-out/assets/img/wsc-timeline.jpg">-->
					<h3>Awards & Achievements</h3>
					<ul class = "ANA_Sub">
					<li>Nanyang Technological University CoLab4Good Award for Service to Society 2017 - Recipient (Supporting Committee Internal Relations) </li>
						<li>The President’s Social Service Award 2008 (Informal Category) – Winner</li>
						<li>The Singapore Youth Award 2006 (Medal of Commendation) Recipient</li>
						<li>The Commonwealth Youth Gold Award 2004 Recipient</li>
						<li>Singapore Youth Award 1999 – Community and Youth Services (Team) – Winner</li>
						
					</ul>
					<h3>Media featuring WSC</h3>
					<ul class = "MED_Sub"> 
						<li>11/07/2018 <a  class = "URLink" href="https://www.zaobao.com.sg/news/fukan/others/story20180711-874239", target="_blank"> <u> 南大职业嘉年华 助弱势者规划就业方向 (Special Project - Challenge ur Limits).</u></a></li> <!-- target="_blank" open new tab-->
						<li>31/07/2017 <a  class = "URLink" href="http://www.zaobao.com.sg/news/singapore/story20170731-783224", target="_blank"> <u>高声欢唱迎国庆 (Regular Service Project - Deaf Community).</u></a></li> 
						<li>01/10/2016 <a  class = "URLink" href="https://www.zaobao.com.sg/special/report/singapore/gamsia365/story20161001-695686", target="_blank"> <u>大学生做慈善　“卖力”洗刷筹款 (Welfare Services Club).</u></a></li> 
					</ul>

					
					
				</div>

				<div class="MEDIArow">
					<div class="MEDIAcolumn">
						<img  class = "MediaIMG" src="../wp-content/themes/stand-out/assets/img/Hist_Media_Features/2018.17.11.jpg" alt="Image of 2018.17.11" style="width:100%" style="height:300">
					</div>
					<div class="MEDIAcolumn">
						<img class = "MediaIMG" src="../wp-content/themes/stand-out/assets/img/Hist_Media_Features/2017.07.31.jpg" alt="Image of 2017.07.31" style="width:100%" style="height:300">
					</div>
					<div class="MEDIAcolumn">
						<img class = "MediaIMG" src="../wp-content/themes/stand-out/assets/img/Hist_Media_Features/2016.10.01.jpg" alt="Image of 2016.10.01" style="width:100%" style="height:300">
					</div>
				</div>
				
				<div class="timeline hide"> <!-- I want to hide the timeline for now because it's lost its aesthetic appeal -->
					<div class="timeline-content">
						<div class="timeline-period">1985</div>
						<div class="timeline-title">ID & PnP</div>
					</div>
					
					<div class="timeline-content">
						<div class="timeline-period">1987</div>
						<div class="timeline-title">Finance</div>
					</div>
					
					<div class="timeline-content">
						<div class="timeline-period">1991</div>
						<div class="timeline-title">DC</div>
					</div>
					
					<div class="timeline-content">
						<div class="timeline-period">1992</div>
						<div class="timeline-title">Elders</div>
					</div>
					
					<div class="timeline-content">
						<div class="timeline-period">1994</div>
						<div class="timeline-title">COR & VM</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">1996</div>
						<div class="timeline-title">Youth</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">2002</div>
						<div class="timeline-title">CURL, VH & FoC</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">2003</div>
						<div class="timeline-title">OVE</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">2008</div>
						<div class="timeline-title">IGC</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">2011</div>
						<div class="timeline-title">GO! & PC</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">2012</div>
						<div class="timeline-title">OH</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">2013</div>
						<div class="timeline-title">IR</div>
					</div>

					<div class="timeline-content">
						<div class="timeline-period">2017</div>
						<div class="timeline-title">MH</div>
					</div>

				</div>
			</div>
			<!--</div>-->
		</div>
	</main>    

<?php get_footer(); ?>