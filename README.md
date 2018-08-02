# NTUWSC
![StandOUT](https://raw.githubusercontent.com/tehtea/ntuwsc/master/screenshot.jpg?token=AXGKn19wZ9VQ5b2Sz2KnT4qGn-_5QPAcks5bbFiWwA%3D%3D)

Official repository for the Stand OUT! Theme in the NTUWSC website
This version of the website is built almost entirely using HTML, CSS and Javascript (converted into .php files for minimal dynamism and to work with wordpress).
<br>
This means that any customisation to such pages has to be made via the template files and not the wordpress front end (Too noob to make it dynamic right now sorry!)
<br>
However, the website proper has Elementor and the Page Builder Framework installed, so new pages can still be built using drag and drop for lower-priority pages,
and in the event of a skills shortage amongst a future IT team.
<br><br>
Please refer to the mapping below for the template to each page:

- page-14.php: about-us
- page-15.php: projects
- page-16.php: newsletters
- page-39.php: homepage
- page-68.php: main-committee
- page-75.php: meeting-minutes
- page-101.php: projects/RSPs
- page-105.php: projects/SPs
- page-107.php: projects/SCs

With the page numbers, you can trace the .js and .css files used for each template using functions.php. 

E.g. Based on this snippet:

```php
	if ( is_page( 14 ) ) {
		wp_enqueue_style( 'wsc-about-us-style', WPBF_CHILD_THEME_URI . '/css/about-us.css', array(), time());
		wp_enqueue_script( 'wsc-about-us-script', WPBF_CHILD_THEME_URI . '/js/about-us.js', array(), time());
	}
	else {
	// remove the styles and scripts after leaving the about us page
		wp_dequeue_style( 'wsc-about-us-style' );
		wp_dequeue_script( 'wsc-about-us-script' );
	}
```

The page with the id of 14 will use about-us.css as the stylesheet and about-us.js as the script file.

## Notes

1. wp_enqueue_styles and wp_enqueue_scripts in functions.php will use time() as the version number argument to disable style / script caching
(which is a burden during development because you won't be able to see the changes you make even after refreshing the page)
