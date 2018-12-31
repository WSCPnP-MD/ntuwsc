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
						updateInfoText("RSP (Visually Handicapped)",
										"Established in 2002, RSP (Visually Handicapped) seeks to reach out to the Visually Handicapped community through our collaboration with the Singapore Association of the Visually Handicapped (SAVH). We focus on giving aid and befriending Visually Handicapped beneficiaries of all ages and motivating them to excel in their pursuits. We provide tuition services and conversational language classes for our beneficiaries from all walks of life, during our regular sessions, to empower and instill confidence in them. We also hope to create lasting and wonderful memories with them, through special events such as Eye Am Aware, as well as celebrations.");
						updateContacts("https://www.facebook.com/WSC.RSPVH/");
						break;
					}
					case 'pc':
					{
						updateInfoText("RSP (Physically Challenged)",
										"​Regular Service Project for the Physically Challenged (RSP PC) is a project under Welfare Services Club which visions a society without discrimination towards the physically challenged. Our mission is to bridge the existing gap between society and the physically challenged community, allowing them to be A PART of society and not APART from society.\
										<br><br>\
										RSP (PC) hosts weekly sessions that alternate between the Singapore Cheshire Home and Friends of the Disabled Society (FDS). We hope to empower our physically challenged beneficiaries and assist their integration into society, as well as increase the public's understanding towards the physically challenged community in Singapore, through our activities and outings.");
						updateContacts("https://www.facebook.com/NTUWSC.RSPPC/");
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
						updateContacts("https://www.facebook.com/ntuwscrspmh/");
						break;
					}
					case 'id':
					{
						updateInfoText("RSP (Intellectually Disabled)",
						"​Established in 1985, Regular Service Project for the Intellectually Disabled (RSPID) was the first RSP of NTU Welfare Services Club. We aim to impart useful social skills and ethics to beneficiaries, and expose them to the ever-changing environment, through the enriching programmes and outings we organise. Ultimately, we hope to help our beneficiaries integrate into society, gain employment, and feel a stronger sense of belonging to the society.");
						updateContacts("https://www.facebook.com/ntuwsc.rspid/");
						break;
					}
					case 'dc':
					{
						updateInfoText("RSP (Deaf Community)",
									"Established in July 1991, RSP (Deaf Community) has been actively working towards raising awareness about the Deaf community and connecting with them. We hope to empower the Deaf community through regular activities such as sports and arts. We also provide weekly tuition services for children with hearing loss and for children of deaf adults (CODA). In addition to our regular sessions, we organise annual public events, such as Hi!Singapore and Christmas Song Sign, which aim to bring about greater appreciation and understanding of the Deaf community in society. Above all, we hope to connect with those we serve and to bridge the gap between them and the society at large.");
						updateContacts("https://www.facebook.com/ntuwscrspdc/");
						break;
					}
					case 'youth':
					{
						updateInfoText("RSP (Youth)",
						"					RSP (Youth) was set up in 1996 to provide an avenue for undergraduates in NTU to befriend and help youth-at-risk and underprivileged youth, by collaborating with various service organisations (Ministry of Social and Family Development, Singapore Girls’ Home, etc.) to engage and inspire teenagers to be better people. RSP (Youth) also helps spur underprivileged youth via academic support and other activities.\
						<br><br>\
						The objective of RSP (Youth) is to be \"A Friend, A Mentor, A Teacher\" to the youths we interact with by giving them support.");
						updateContacts("https://www.facebook.com/ntuwscrspyouth/");
						break;
					}
					case 'foc':
					{
						updateInfoText("RSP (Friends of Children)",
						"					\"Friends of Children\" (FoC) is a Regular Service Project which had started off as a special project under Elders in 2002, before branching out as a separate Regular Service Project in 2006. We mainly provide free academic coaching, mentoring and life-skills teaching to children from low-income families on a weekly basis. Apart from the weekly mentoring, our portfolio also organises events, whereby we may impart life skills to our beneficiaries. We organise two main events annually– namely the December and June Events– to encourage interaction between all the beneficiaries and volunteers from all centres.");
						updateContacts("https://www.facebook.com/NtuWscRSPFriendsOfChildren/", "http://wscrspfoc.weebly.com/");
						break;
					}
					case 'elders':
					{
						updateInfoText("RSP (Elders)",
						"RSP (Elders) was set up in July 1992, to meet the increasing demand for volunteers to interact with the senior citizens in our society. RSP (Elders) volunteers are a constant source of care and companionship for the elderly beneficiaries on a long-term basis. We actively seek to understand the biopsychosocial needs of the elderly, and aim to alleviate their loneliness and boredom by befriending and organising activities for them. Regular sessions are conducted every Saturday at our centres located at Ang Mo Kio (AWWA Home), Novena (Ren Ci Community Hospital), and Sembawang (SWAMI Home). ");
						updateContacts("https://www.facebook.com/NTUWSCRSPElders/", "http://ntuwscrspelders.wix.com/blog");
						break;
					}
					case 'oh':
					{
						updateInfoText("RSP (Operation Hope)",
						"					Regular Service Project Operation Hope, (RSP OH) was formerly known as Operation Hope where it was co-opted by WSC under Special Projects (SP).\
						Our key objectives of this portfolio are to:\
						​<br>\
						<br>\
						(1) reach out and connect with children and youths suffering from chronic and potentially life-threatening diseases and\
						<br>\
						(2) raise awareness of the plight of the beneficiaries.\
						<br>\
						<br>\
						From a portfolio which focuses on conducting one-off events for the beneficiaries, OH decided to rebrand and transit into an RSP in 2017, in order to make greater and longer-lasting impacts in the beneficiaries’ lives.\
						RSP (OH) currently works with various organisations to engage their volunteers in fun and meaningful activities during weekly volunteering sessions. We also hold annual events, which involves outdoor engagement or performance for the beneficiaries to enjoy a day-off outside of the designated centres.\
						");
						updateContacts("https://www.facebook.com/NTUOperationHope/");
						break;
					}
					/* special projects */
					case 'igc':
					{
						updateInfoText("Ignite Change",
						"​Ignite Change (IGC) is WSC's annual Freshmen Orientation Programme (FOP). We aim to foster bonds amongst the participants and ignite the spirit of volunteerism in potential volunteers. Throughout the duration of the camp, aside from enjoying the fun and exciting games planned by our main committee, participants will get to visit WSC's various Regular Service Projects (RSPs), to experience volunteering and also, interact with the beneficiaries that WSC works closely with.\
						Nothing is more fulfilling than planning a big event for a year and seeing it come to fruition and inspire benevolent change to the surroundings. You can expect exhilarating bonding sessions, heart-warming RSP visits, and that sense of purpose which accompanies meaningful work. We ignite change not just in potential volunteers, but also in you!");
						updateContacts("https://www.facebook.com/NTUWSCIgniteChange", "https://ignitechange-camp.weebly.com/")
						break;
					}
					case 'vm':
					{
						updateInfoText("Volunteer Management",
						"					Targeting mainly non-WSC members, Volunteer Management (VM) aims to spread the spirit of volunteerism among students of NTU, through organising various events which involve beneficiaries from different community groups. By providing an easily accessible platform for meaningful interaction between the beneficiaries and the new student volunteers, we hope to ignite students’ passion for volunteerism and create a ripple effect, encouraging more students to share the joy of giving. In addition, VM hopes to raise awareness and understanding of different groups of beneficiaries, within NTU.\
						<br><br>\
						Come join us in planning events, and gain new experiences by interacting with different beneficiaries and student volunteers!");
						updateContacts("http://www.facebook.com/NtuWscVolunteerManagement");
						break;
					}
					case 'curl':
					{
						updateInfoText("Challengeur Limits",
						"Founded in 2002, Challenge ur Limits (CurL) is a special project, which organises events that allow beneficiaries with various special needs, student volunteers and members of the public to participate in physically and mentally challenging activities together. We aim to increase awareness of people with disabilities through promoting interaction between the beneficiaries and the public, and encourage society to look beyond beneficiaries’ disabilities, to see their spirit, determination and passion for life, and that they are able to also do their part for society. We hope that our events can lay the seeds of a more inclusive community, in which people will have a better understanding of the disabled. In short, CurL hopes to bring across the message that “Disability should never be equated to Disqualification”.");
						updateContacts("https://www.facebook.com/NTUWSCCurL/");
						break;
					}
					case 'cor':
					{
						updateInfoText("Camp OutReach",
						"Camp OutReach (COR), one of WSC's Special Projects, works closely with the Deaf community in Singapore. COR's core belief is that Deafness does not limit one’s capabilities or potential, and thus, our aim is to empower the Deaf by providing them with opportunities to contribute back to society. We strive to achieve this through local volunteering sessions and an annual Overseas Community Involvement Program (OCIP), where COR members and Deaf volunteers work together to serve an overseas community in need. COR also aims to bridge the communication gap between the Deaf and the hearing, and to enable interaction and integration beyond spoken languages. Regardless of whether it is Sign Language, spoken English or a foreign mother tongue that we communicate through, we hope to ultimately be able to unite people together through empathy, in spite of our differences.");
						updateContacts("https://www.facebook.com/campoutreach");
						break;
					} 
					case 'ove':
					{
						updateInfoText("Overseas Volunteering Expedition",
						"Overseas Volunteering Expedition (OVE) aims to provide a suitable platform for individuals with the passion for volunteering, to help less-privileged communities beyond Singapore's shores. In addition to striving to achieve sustainability through projects that would empower communities in the long run, OVE hopes to promote the spirit of volunteerism by inspiring volunteers to continuously collaborate with local and international communities to effect greater change. Through establishing a close-knitted group of individuals with the common goal of serving those in need, OVE aims to nurture future leaders who can think critically about prevalent social issues and creatively design solutions to alleviate the situation. To date, OVE has extended its outreach to several countries, such as Cambodia, China, Laos, Nepal, Philippines, Thailand, and Vietnam.");
						updateContacts("https://www.facebook.com/OverseasVolunteeringExpedition");
						break;
					}
					/* supporting committees */
					case 'ir':
					{
						updateInfoText("Internal Relations",
										"The Internal Relations (IR) committee is one of the supporting committees of WSC, in charge of organising large-scale charity and bonding events for the club. The portfolio organises 3 main events yearly, namely WSC Bonding Day, WSC Community Service Day as well as the Annual Appreciation Dinner, which provide wonderful opportunities for members from the various portfolios in WSC to know each other better and develop friendships while having great fun. Prospective members will be able to try their hand in a multitude of event planning roles and will gain invaluable experience in tackling future demands.");
						updateContacts("https://www.facebook.com/internalrelationswsc/");
						break;
					}
					case 'fc':
					{
						updateInfoText("Finance Committee",
										"The Finance Committee manages the allocated budget from the Finance Office across all portfolios within WSC. Our support in the financial aspect of each portfolio’s operations enables them to focus on and achieve their respective objectives and goals. \
										Active liaising with all portfolios and the Finance Office, our role is paramount in ensuring that all portfolios remain financially healthy at all times by monitoring expenditures, incomes and reporting any variances, as well as facilitating financial procedures on claims, donations and remunerations through active liaison with all portfolios and the Finance Office.");
						updateContacts();
						break;
					}
					case 'pnp':
					{
						updateInfoText("Publicity and Publications",
										"Comprising of the Digital Imaging, Journalism, Design, Welfare and Public Relations divisions, Publicity and Publications (PnP) is a relatively new Supporting Committee that provides media coverage of all the WSC portfolios. PnP publishes bi-annual StandOUT newsletters, which share the happenings within the WSC community and provide content related to volunteering, both online and in print. PnP also maintains a strong online presence for WSC on various platforms including an official website, social media accounts, e-Banner, Campus Buzz and campus notice board updates. In addition, PnP also keeps the media archives for WSC up-to-date, and conducts annual design, journalism and photography workshops for like-minded members to #MakePnPGreaterThanBefore.");
						updateContacts("https://www.facebook.com/WSCPnP/");
						break;
					}
					case 'go':
					{
						updateInfoText("Growth & Opportunities!", 
										"					Established in 2011, Growth & Opportunities! (GO!) is a vibrant and dynamic committee that focuses on social-entrepreneurial and developmental projects of WSC. As the exploratory arm of WSC, besides actively seeking sponsorship to support our volunteering activities, we also explore new avenues of growth by spearheading new social initiatives every year to further develop WSC's capabilities, and organise annual events such as Social Impact Week. \
										<br><br>\
										The three key objectives of GO! are to: \
										<br><br>1. Spread awareness of social causes and promote spirit of volunteerism to NTU student population. \
										<br>2. Explore new opportunities for WSC to grow / Support new causes outside the current boundaries of WSC. \
										<br>3. Facilitate collaborations with other organisations and clubs within and outside of NTU.");
						updateContacts("https://www.facebook.com/ntuwscgrowthandopportunities/");
						break;
					}
					default:
					{
						updateInfoText("LOL",
										"You honggan got bug");
						updateContacts("getRekt.com", "www.getRekt.com");
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

		function updateContacts(fb, website) {
			if ( fb ) {
				$("#fb").attr("href", fb);
				$("#fb").css('visibility', 'visible');
			} else {
				$("#fb").css('visibility', 'hidden');
			}
			if ( website ) {
				$("#website").attr("href", website);
				$("#website").css('visibility', 'visible');
			} else {
				$("#website").css('visibility', 'hidden');
			}
		}

		// function for updating images for the portfolio
		function getImages(portfolio) {
			$.ajax({
				type : "GET",  //type of method
				url  : "../portfolio-image-endpoint/" + "?" + "genre=" + portfolio,
				success: function(res){  
							var images = res.split(",");
							var containersParent = $(".owl-carousel .item img");
							var containers = $(".owl-carousel .item img");
							$.each(containers, function(k, v)  {
								if (images[k])
								{
									v.src = "../wp-content/themes/stand-out/assets/img/\
									portfolio-page-image-showcase/"+portfolio+"/"+images[k];
								}
								else {
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


