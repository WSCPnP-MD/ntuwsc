<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>
		
		<script>
			function ordinal_suffix_of(i) {
				var j = i % 10,
					k = i % 100;
				if (j == 1 && k != 11) {
					return i + "st";
				}
				if (j == 2 && k != 12) {
					return i + "nd";
				}
				if (j == 3 && k != 13) {
					return i + "rd";
				}
				return i + "th";
			}
			
			function createNewExco(i) {
				var url = [	"1ccbHiMyPR9Y-hsiZ-BtQRWAFf7CuYCJp",
						"1hXld2MLnDNDAY-NG4GOXsL2DS-31Zl32",
						"0Bwd-OADPSHINQ3lpZ2tSeFllUkE",
						"0B1Ycvr2lY3mjNUQyOU5jQm5WZ28",
						"0BxPBcdTtdrNhaEdnWkNGNkpnS2c"];
						
				var div = document.createElement('div');
				var dAtt1 = document.createAttribute("id");
				dAtt1.value = "content";
				div.setAttributeNode(dAtt1);
				
				
				var h1 = document.createElement('h1');
				var hAtt1 = document.createAttribute("style");
				hAtt1.value = "color:white; padding-top:20px; padding-left:60px;";
				h1.setAttributeNode(hAtt1);
				
				var u = document.createElement('u');
				var b = document.createElement('b');
				b.innerHTML = ordinal_suffix_of(25-i)+" Exco"
				u.appendChild(b);
				h1.appendChild(u);
				
				
				var frame = document.createElement('iframe');
				
				var fAtt1 = document.createAttribute("src");
				fAtt1.value = "https://drive.google.com/embeddedfolderview?id="+url[i]+"#grid";
				frame.setAttributeNode(fAtt1);
				
				var fAtt2 = document.createAttribute("scrolling");
				fAtt2.value = "no";
				frame.setAttributeNode(fAtt2);
				
				var fAtt3 = document.createAttribute("style");
				fAtt3.value = "width:100%; height:65vh; border:2; overflow:hidden;";
				frame.setAttributeNode(fAtt3);
				
				div.appendChild(h1);
				div.appendChild(frame);
				document.body.appendChild(div);
			}
			
			for (var i=0;i<(new Date().getFullYear()-2014);i++) {
				alert(new Date().getFullYear());
				createNewExco(i);
			}
		</script>
	    
<?php get_footer(); ?>