(function($) {

	$( document ).ready(function() {
		var $grid = $('.grid').isotope({
			// options
			itemSelector: '.box',
			layoutMode: 'fitRows'
		});
			
		$('#getRSP').click(function() {
			$grid.isotope({ filter: '.RSP' });
		});

		$('#getSP').click(function() {
			$grid.isotope({ filter: '.SP' });
		});

		$('#getSC').click(function() {
			$grid.isotope({ filter: '.SC' });
		});

		$('#getAll').click(function() {
			$grid.isotope({ filter: '*' });
		});
		$(".box").children().each(function( key, value ) {
			$(this).click(function() {
				var proj = $(this).parent().attr('id');
				switch (proj)
				{
					/* Regular service projects */
					case 'vh':
					{
						updateInfoText("RSP (Visually Handicapped)","RSP (Youth) was set up in 1996 to provide an avenue for NTU students to befriend and volunteer with the Youth-at-risk and underprivileged youth.  /<br><br>/RSP (Youth) collaborates with various service organisations (Ministry of Social and Family Development, Singapore Children Society, Sport Singapore, Family Services Centres etc.) to engage and inspire teenagers to be better people and learn to overcome various difficulties faced in their lives.  /<br><br>/The objective of RSP (Youth) is to be \"A Friend, A Teacher, A Mentor\" to the youths we support."
						);
						updateContacts({'fb':"https://www.facebook.com/WSC.RSPVH/", 'instagram':"https://www.instagram.com/ntuwsc_rspvh/"}
						);
						break;
					}
					case 'pc':
					{
						updateInfoText("RSP (Physically Challenged)","\"To bridge the gap between society and the Physicaly Challenged community, allowing them to be a part of society and not apart from society\"  /<br><br>/Regular Service Project (Physically Challenged) strives to reconnect and integrate the Physically Challenged community with society.  /<br><br>/We serve the Singapore Cheshire Home, and Friends of the Disabled Society (FDS), by engaging our service users through activities and workshops to brighten and enrich their lives. We also conduct home visitations to find out more about the current condition of our service users, and to understand them on a more personal level.  /<br><br>/RSP (Physically Challenged) remains commited to our vision of an inclusive society, where the Physically Challenged community can be a part of."
						);
						updateContacts({'fb':"https://www.facebook.com/NTUWSC.RSPPC/", 'instagram':"https://www.instagram.com/ntuwsc_rsppc/?hl=en"}
						);
						break;
					}
					case 'mh':
					{
						updateInfoText("RSP (Mental Health)",
						"​Regular Service Project for the Mental Health (MH) is the latest addition to WSC in 2017 which aims to create greater awareness of our beneficiaries and to help students understand them better. By interacting with them weekly, students may forge a bond with the beneficiaries, allowing the beneficiaries to be part of a greater community.\
						<br><br>\
						We hope that these interactions will help the beneficiaries to feel closer and reconnect to the society at the same time. The activities we carry out, are also targeted at helping to keep them active mentally and physically, while learning new skills and improving themselves.\
						<br><br>\
						Apart from weekly sessions at IMH every Saturday, which comprise of activities such as handicraft making and games, are held every Saturday, from 3pm to 5pm, at the Institute of Mental Health (IMH). The session comprises of befriending, handicrafts making, games and event celebrations such as Chinese New Year and Christmas Day.");
						updateContacts({'fb':"https://www.facebook.com/ntuwscrspmh/", 'instagram':"https://www.instagram.com/ntuwsc_rspmh/?hl=en"});
						break;
					}
					case 'id':
					{
						updateInfoText("RSP (Intellectually Disabled)","Regular Service Project for the Intellectually Disabled (RSPID) was formed in 1985 and is the first RSP of NTU Welfare Services Club. RSPID works together with West End, a group under MINDS MYG, to conduct weekly sessions for our Intellectually Disabled Service Users. Sessions are held every Saturday, from 2.30pm to 5.30pm, at MINDS Woodlands Gardens School and 9.30am to 12.30pm at MINDS Clementi. Session comprises Sing-along, Curricular Development Training (CDT), Physical and Recreational Training (PRT) and Tea Break. Each segment is planned by a rotational planning committee to give every volunteer the chance to lead. Occasionally, outdoor activities such as Swimming Therapy, visit to Zoo and other places of interest are arranged for our beneficiaries.  /<br><br>/RSPID's ultimate goals are to impart skills to our beneficiaries so they can be more independent. RSPID also aims to create a family of volunteers who are motivated to make a difference in the lives of beneficiaries."
						);
						updateContacts({'fb':"https://www.facebook.com/ntuwsc.rspid ", 'instagram':"https://www.instagram.com/ntuwsc_rspid/"}
						);
						break;
					}
					case 'dc':
					{
						updateInfoText("RSP (Deaf Community)","Regular Service Project for the Deaf Community (RSPDC) was set up under NTU Welfare Services Club in July 1991 with the objective of helping the Deaf community through our weekly tuition programme for deaf children and teenagers, and also enrichment courses held for deaf youth and adults.  /<br><br>/We have since progressed to engaging both the Deaf community and hearing public through events such as Christmas song signing performances and HiSg. Christmas song signing is a way to raise awareness about the deaf community by performing for the hearing public. On the other hand, HiSg aims to allow individuals from both communities to interact and engage with one another in a fun setting."
						);
						updateContacts({'fb':"https://www.facebook.com/ntuwscrspdc/", 'instagram':"http://www.instagram.com/ntuwsc_rspdc"}
						);
						break;
					}
					case 'youth':
					{
						updateInfoText("RSP (Youth)","RSP (Youth) was set up in 1996 to provide an avenue for NTU students to befriend and volunteer with the Youth-at-risk and underprivileged youth.  /<br><br>/RSP (Youth) collaborates with various service organisations (Ministry of Social and Family Development, Singapore Children Society, Sport Singapore, Family Services Centres etc.) to engage and inspire teenagers to be better people and learn to overcome various difficulties faced in their lives.  /<br><br>/The objective of RSP (Youth) is to be \"A Friend, A Teacher, A Mentor\" to the youths we support."
						);
						updateContacts({'fb':"https://www.facebook.com/ntuwscrspyouth/", 'instagram':"https://www.instagram.com/ntuwsc_rspyouth/"}
						);
						break;
					}
					case 'foc':
					{
						updateInfoText("RSP (Friends of Children)","Regular Service Project Friends of Children (RSP FoC) is a welfare programme that provides weekly mentoring sessions and life skill activities for children (4 to 17 years old) from lower income families. Through our 14 centres across Singapore and 2 Portfolio-wide annual events for the children, we aim not only to focus on developing our beneficiaries through academics, but also through character building and mentorship."
						);
						updateContacts({'fb':"https://www.facebook.com/NtuWscRSPFriendsOfChildren/", 'instagram':"https://www.instagram.com/ntuwsc_rspfoc/?hl=en"}
						);
						break;
					}
					case 'elders':
					{
						updateInfoText("RSP (Elders)","Regular Service Project (Elders) was set up in July 1992 to meet the increasing demand for volunteers to interact with the senior citizens in our society. Volunteers can expect to engage in meaningful activities during our sessions held every Saturday from 3pm - 5pm, such as befriending the elderly and being involved in major festive celebrations (e.g. Chinese New Year, Christmas) at our respective centres.  /<br><br>/RSP (Elders) operates on the conviction that a meaningful way in which the volunteers can help is by being a constant source of care and companionship for the elders on a long-term basis. Through our weekly sessions and events, we hope to make a difference to the lives of the elderly by spreading joy to them.  /<br><br>/To date, we have been partnering with the following centres: /<br>/1.  Asian Women’s Welfare Association (AWWA) /<br>/2. Tan Tock Seng – Ren Ci Community Hospital /<br>/3. Sunshine Welfare Action Mission (SWAMI) Home /<br>/4. Pearl’s Hill Care Home"
						);
						updateContacts({'fb':"https://www.facebook.com/NTUWSCRSPElders/", 'instagram':"https://www.instagram.com/ntuwsc_rspelders/"}
						);
						break;
					}
					case 'oh':
					{
						updateInfoText("RSP (Operation Hope)","Regular Service Project (Operation Hope) reached out to connect with children who are suffering from chronic illnesses. To reach out to our target community, we volunteer weekly with KK Women's and Children's Hospital, Children's Cancer Foundation and Club Rainbow (Singapore).  /<br><br>/Volunteers can choose to participate in /<br>/(i) weekday play sessions or /<br>/(ii) Saturday tutoring sessions, of which most are held in hospitals.  /<br><br>/In play sessions, volunteers engage children with activities ranging from simple colouring to complex board games. In tutoring sessions, each volunteer will be paired with a child to guide them through assigned materials.  /<br><br>/RSP (Operation Hope) also organises 3 annual events ranging from outings to carnival games and crafts activities."
						);
						updateContacts({'fb':"https://www.facebook.com/RSPOperationHope/", 'instagram':"https://www.instagram.com/ntuwsc_rspoh/"}
						);
						break;
					}
					/* special projects */
					case 'igc':
					{
						updateInfoText("Ignite Change","Ignite Change (IGC) is a Special Projects (SP) portfolio of NTU Welfare Services Club (WSC). An annual orientation programme targeted at the freshmen and existing students of NTU, it uses a fresh approach different from traditional camps by exposing students to volunteerism and various service users in addition to the usual fun and games.  /<br><br>/IGC conducts visits in collaboration with various NTU WSC portfolios to allow volunteers to get first-hand experience of interacting with the beneficiaries. In addition, Service Learning is introduced to equip the volunteers with new skills and to develop new activities. As a platform to expose potential volunteers to WSC and ignite the spirit of volunteerism in them, IGC aims to bridge a connection between our students and our service users."
						);
						updateContacts({'fb':"https://www.facebook.com/NTUWSCIgniteChange/", 'instagram':"https://www.instagram.com/ntuwsc_igc"}
						);
						break;
					}
					case 'vm':
					{
						updateInfoText("Volunteer Management","VM consists of passionate, like-minded people keen to spread the spirit of volunteerism beyond Welfare Services Club. Our committee members act as agents of change, to rally NTU students as volunteers for our trademark events - Kids' World and Golden Generation. Through our annual events, we hope to provide a sustainable platform for volunteers to do community service, and allows continuous exposure to the joys of service."
						);
						updateContacts({'fb':"https://www.facebook.com/NtuWscVolunteerMovement/", 'instagram':"https://www.instagram.com/ntuwsc_vm/"}
						);
						break;
					}
					case 'curl':
					{
						updateInfoText("Challenge ur Limits","Challenge Ur Limits (CurL) is a special project that organises exciting events for our service users with various special needs, student volunteers, and members of the public to participate in physically and mentally challenging activities together. We aim to find different ways to empower our service users to allow both themselves and the public to see beyond their disabilities. We hope that our events can lay the seed for a more inclusive society, where we would all have a better understanding of the disabled. /<br>/In short, CurL hopes to bring across the message \"Disability should never be equated to Disqualification\". "
						);
						updateContacts({'fb':"https://www.facebook.com/NTUWSCCurL/", 'instagram':"https://instagram.com/ntuwsc_curl"}
						);
						break;
					}
					case 'cor':
					{
						updateInfoText("Camp OutReach","Camp OutReach (COR) is an initiative by NTU students with aims to raise awareness and close the gap between the Deaf and hearing in our society. We organize exciting and empowering local events that allow the Deaf and hearing to come together to work, play and exchange ideas. Our project includes an annual Overseas Community Involvement Programme (OCIP), where COR members and Singaporean Deaf volunteers from different walks of life come together to serve overseas communities in need. In addition, efforts are also made to immerse our volunteers into the overseas Deaf community and culture during the OCIP trip. We don’t help the Deaf; we empower them to help others."
						);
						updateContacts({'fb':"https://facebook.com/campoutreach", 'instagram':"https://instagram.com/ntuwsc_cor"}
						);
						break;
					} 
					case 'ove':
					{
						updateInfoText("Overseas Volunteering Expedition","OVE is a student-led group committed to giving help to the international community through annual overseas volunteering projects. Projects are anchored by the members of OVE who research and decide on destinations, plan activities, raise funds and source for sponsorships. It is the hope of OVE to provide help to the less fortunate beyond Singapore's shores to improve their quality of life."
						);
						updateContacts({'fb':"https://www.facebook.com/OverseasVolunteeringExpedition/", 'instagram':"https://www.instagram.com/ntuwsc_ove/"}
						);
						break;
					}
					/* supporting committees */
					case 'ir':
					{
						updateInfoText("Internal Relations","Internal Relations (IR) is a supporting committee of Nanyang Technological University’s Welfare Services Club. Guided by our mission to weave WSC together, IR aims to foster social cohesion between WSC members across all portfolios through fun and exciting bonding activities and community service. Throughout the academic year, IR organises events for WSC members and this includes Community Service Days and Annual Appreciation Dinner. These events strive to strengthen ties between WSC members while giving back to society.  /<br><br>/Our Objectives: /<br>/1. To facilitate inter-portfolio bonding and cultivate friendships in WSC. /<br>/2. To generate positive impact on the community as one WSC.  /<br><br>/Our Awards and Achievements: /<br>/1. Nanyang Technological University CoLab4Good Award for Service to Society 2017 - Recipient"
						);
						updateContacts({'fb':"https://www.facebook.com/internalrelationswsc", 'instagram':"https://www.instagram.com/ntuwsc_ir"}
						);
						break;
					}
					case 'fc':
					{
						updateInfoText("Finance","Being one of the supporting committees of WSC, the Finance Committee manages the allocated budget from the Finance Office across all /<br>/portfolios within WSC. Our support in the financial aspect of each portfolio’s operations enables them to focus on and achieve their respective /<br>/objectives and goals.To facilitate efficient coordination between the club and NTU, our role is paramount in making sure that the portfolios /<br>/remain financially healthy at all times by monitoring expenditures, incomes and reporting any variances. Additionally, we facilitate financial /<br>/procedures on claims, donations and remunerations through active liaison with all portfolios and the Finance Office."
						);
						updateContacts();
						break;
					}
					case 'pnp':
					{
						updateInfoText("Publicity and Publications","Publicity and Publications is an important backbone of WSC, providing extensive and professional media coverages for most of the WSC portfolios. We comprise of Design, Digital Imaging, Journalism and Media Development divisions and each team is responsible for the branding of the entire WSC community. Design team is incharge of creating refreshing yet inspiring publication and publicity materials for the club; Journalism team publishes the bi-annual StandOUT newsletter which aims to share the happenings within WSC community; Digital Imaging is responsible for safe keeping the memories of each and individual portfolio; Media Development team helps to brand WSC as a whole and reach out to the entire NTU community."
						);
						updateContacts({'fb':"https://www.facebook.com/WSCPnP/", 'instagram':"https://www.instagram.com/ntuwsc_pnp"}
						);
						break;
					}
					case 'go':
					{
						updateInfoText("Growth & Opportunities!","Established in 2011, Growth & Opportunities! (GO!) is a vibrant and dynamic committee that focuses on social-entrepreneurial and developmental projects of WSC. As the exploratory arm of WSC, besides actively seeking sponsorship to support our volunteering activities, we also explore new avenues of growth by spearheading new social initiatives every year to further develop WSC's capabilities, and organise annual events such as Social Impact Week.  /<br><br>/The three key objectives of GO! are to:  /<br><br>/1. Spread awareness of social causes and promote spirit of volunteerism to NTU student population. /<br>/2. Explore new opportunities for WSC to grow / Support new causes outside the current boundaries of WSC. /<br>/3. Facilitate collaborations with other organisations and clubs within and outside of NTU."
						);
						updateContacts({'fb':"https://fb.me/ntuwscgo", 'instagram':"https://www.instagram.com/ntuwsc_go"}
						);
						break;
					}
					default:
					{
						updateInfoText("LOL",
										"You gg got bug");
						updateContacts("getRekt.com", "www.getRekt.com", "www.getRekt.com");
					}
				}
				getImages(proj); //update carousel based on project
				$('html, body').animate({
					scrollTop: $("#info-box").offset().top
				}, 1000);
				$("#info-box").css('visibility', 'visible');
			});
		});

		function updateInfoText(header, text) {
			$("#info-box h2").text(header);
			$("#info p").html(text);
		}

		function updateContacts(medias) {
			// catch the edge case where nothing was passed in.
			if ( medias == null )
			{
				$("#fb").css('visibility', 'hidden');
				$("#website").css('visibility', 'hidden');
				$("#instagram").css('visibility', 'hidden');
			}
			else
			{
				if ( medias['fb'] ) {
					$("#fb").attr("href", medias['fb']);
					$("#fb").css('visibility', 'visible');
				} else {
					$("#fb").css('visibility', 'hidden');
				}
				if ( medias['website'] ) {
					$("#website").attr("href", medias['website']);
					$("#website").css('visibility', 'visible');
				} else {
					$("#website").css('visibility', 'hidden');
				}
				if ( medias['instagram'] ) {
					$("#instagram").attr("href", medias['instagram']);
					$("#instagram").css('visibility', 'visible');
				} else {
					$("#instagram").css('visibility', 'hidden');
				}
			}
		}

		// function for updating images for the portfolio
		function getImages(portfolio) {
			$.ajax({
				type : "GET",  //type of method
				url  : "../portfolio-image-endpoint/" + "?" + "genre=" + portfolio,
				success: function(res){  
							var images = res.split(",");

							var containers = $(".owl-carousel .item img");

							$.each(containers, function(k, v)  {
								if (images[k])
								{
									v.removeAttribute("style"); // let the image show up
									v.src = "../wp-content/themes/stand-out/assets/img/\
									portfolio-page-image-showcase/"+portfolio+"/"+images[k];
								}
								else {
									v.setAttribute("style", "display: none !important"); // hide image if there's no more image.
									v.src = "../wp-content/themes/stand-out/assets/img/\
									portfolio-page-image-showcase/default/placeholder.jpg";
								}
							});
						}
			});
		}

		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:1,
			loop: false,
			rewind: true,
			margin:5,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			autoHeight: true,
		});
	});

})( jQuery );


