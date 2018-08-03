# NTUWSC
Official repository for the Stand OUT! Theme in the NTUWSC website.
<br><br>
This version of the website is built almost entirely using HTML, CSS and Javascript (converted into .php files for minimal dynamism and to work with wordpress).
<br><br>
This means that any customisation to such pages has to be made via the template files and not the wordpress front end (Too noob to make it dynamic right now sorry!)
<br><br>
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


## How to convert static files into a wordpress page template 

1. Log into the wordpress admin to look for the page that you are looking to place the template on.
2. From that page's url, get it's page-id (e.g. from `https://clubs.ntu.edu.sg/ntuwsc/wp-admin/post.php?post=19&action=edit` you can see that the page in question has the page-id of 19)
3. Go to the StandOUT folder, and create a new blank template file with the page-id trailing it. (Based off the above example, you will create a template file with the name: `page-19.php`)
4. Copy and paste the contents of `page.php` in the StandOUT folder inside your new template file.
5. Delete everything between the lines `get_header(); ?>` and `<?php get_footer(); ?>` inside your new template file.
5. Then, open up your original HTML file, and paste everything between the `<body>` tag into the blank space you created between  `get_header(); ?>` and `<?php get_footer(); ?>`
6. To link the CSS and JS files which were originally linked in the `head` of your original HTML file, go to functions.php and add something like this within the function `wpbf_child_scripts()`:
```php
	if ( is_page( 19 ) ) {
		wp_enqueue_style( 'wsc-<page-name>-style', WPBF_CHILD_THEME_URI . '/css/<page-name>.css', array(), time());
		wp_enqueue_script( 'wsc-<page-name>-script', WPBF_CHILD_THEME_URI . '/js/<page-name>.js', array(), time());
	}
	else {
		wp_dequeue_style( 'wsc-<page-name>-style');
                         wp_dequeue_script('wsc-<page-name>-script');
	}
```
7. Voila! Make sure to put all dependencies in their respective folders. By convention, Images will go to the `assets/img/` folder,  while CSS and JS files will go to the `/css` and `/js` folders respectively. You may notice that the `/assets` folder has the `./css` and `./js` folders too, but by convention in external projects, they are used to place external dependencies such as `bootstrap` or `fontawesome` or `owlCarousel`.
8. Oh. Remember to update the mapping above if you create a new template.