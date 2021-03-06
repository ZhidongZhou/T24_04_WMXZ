<?php

$review_pop = array (
	'title' => __( 'Help Us With Your Review', 'i-design' ),
    'desc' => __( '<p class="nx-revpop-cont-1"><b>If you like i-design</b>, share few words in your review, it helps the theme to spread. 
                   Few words of appriciation also motivates the designers and the developers.</p>
                   <p class="nx-revpop-cont-1">If you have not posted your review/feedback yet, we request you to post your review.</p>', 'i-design' ),
	'link' => __( 'Post Your Review', 'i-design' ),
	'conclusion' => __( '<p class="nx-revpop-end"><b>Thanks in Advance</b><br /><span style="font-size: 12px;"><i>Team TemplatesNext</i></span></p>', 'i-design' ),
    
);

$tx_plugins = array (
	array(
            'name' => __( 'TemplatesNext ToolKit (<span class="nx-red">Highly Recommended</span>)', 'i-design' ),
            'desc' => __( 'This plugin adds all the custom post types like, portfolio, Team, Slider, Testimonials etc along with all the shortcodes. This plugin also extends the plugin “Siteorigin Pagebuilder” with its own functionalities.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/templatesnext-toolkit/' ),
			'tutorial' => esc_url( 'https://www.youtube.com/watch?v=vqTHQCN2ci4' ),
			'title' => 'TemplatesNext ToolKit',
			'slug' => 'templatesnext-toolkit',			
			'pluginfile' => 'tx-toolkit.php',
			'ocdi' => 1,		
    ),
	array(
            'name' => __( 'Contact Form 7 (<span class="nx-red">Recommended</span>)', 'i-design' ),
            'desc' => __( 'A form creating plugin to help you create your own contact form or other kinds of forms.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/contact-form-7/' ),
			'tutorial' => esc_url( 'https://www.youtube.com/watch?v=wy70WGCjMY4' ),
			'title' => 'Contact Form 7',			
			'slug' => 'contact-form-7',
			'pluginfile' => 'wp-contact-form-7.php',
			'ocdi' => 1,						
    ),
	array(
            'name' => __( 'One Click Demo Import (<span class="nx-red">Optional</span>)', 'i-design' ),
            'desc' => __( 'This plugin is only required if you choose to import the predefined demo contents, Once you are done with your demo setup you can deactivate the plugin.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/one-click-demo-import/' ),
			'title' => 'One Click Demo Import',			
			'slug' => 'one-click-demo-import',
			'pluginfile' => 'one-click-demo-import.php',
			'ocdi' => 1,			
    ),
	array(
            'name' => __( 'Elementor Page Builder (<span class="nx-red">Optional</span>)', 'i-design' ),
            'desc' => __( 'Drag & Drop live page builder', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/elementor/' ),
			'title' => 'Elementor',			
			'slug' => 'elementor',
			'pluginfile' => 'elementor.php',
			'ocdi' => 0,			
    ),
	array(
            'name' => __( 'Brizy Page Builder (<span class="nx-red">Optional</span>)', 'i-design' ),
            'desc' => __( 'Drag and drop page builder with pre-built sections.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/brizy/' ),
			'tutorial' => esc_url( 'https://www.youtube.com/watch?v=3sRJ0-PAuXk' ),
			'title' => 'Brizy – Page Builder',			
			'slug' => 'brizy',
			'pluginfile' => 'brizy.php',
			'ocdi' => 0,				
    ),
	array(
            'name' => __( 'Smart Slider 3 (<span class="nx-red">Optional</span>)', 'i-design' ),
            'desc' => __( 'Probably the best slider plugin with free slider library.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/smart-slider-3/' ),
			'tutorial' => esc_url( 'https://www.youtube.com/watch?v=lsq09izc1H4' ),
			'title' => 'Smart Slider 3',			
			'slug' => 'smart-slider-3',
			'pluginfile' => 'smart-slider-3.php',
			'ocdi' => 0,				
    ),		
	array(
            'name' => __( 'SiteOrigin PageBuilder (<span class="nx-red">Optional</span>)', 'i-design' ),
            'desc' => __( 'This drag and drop page builder plugin makes it easy to build responsive grid-based page content. Our themes supports and extends SiteOrigin PageBuilder functionalities.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/siteorigin-panels/' ),
			'tutorial' => esc_url( 'https://siteorigin.com/page-builder/documentation/' ),
			'title' => 'Page Builder by SiteOrigin',			
			'slug' => 'siteorigin-panels',
			'pluginfile' => 'siteorigin-panels.php',
			'ocdi' => 1,						
    ),
	array(
            'name' => __( 'SiteOrigin Widgets Bundle (<span class="nx-red">Optional</span>)', 'i-design' ),
            'desc' => __( 'Additional useful widgets for pagebuilder such as Google map, Button, Image, Price table, etc.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/so-widgets-bundle/' ),
			'title' => 'SiteOrigin Widgets Bundle',			
			'slug' => 'so-widgets-bundle',
			'pluginfile' => 'so-widgets-bundle.php',
			'ocdi' => 1,				
    ),
	array(
            'name' => __( 'Contact Form 7 Honeypot (<span class="nx-red">Optional</span>)', 'i-design' ),
            'desc' => __( 'Plugin to fool spammers with a dummy filed visible only to bots.', 'i-design' ),
			'pluginurl' => esc_url( 'https://wordpress.org/plugins/contact-form-7-honeypot/' ),
			'title' => 'Honeypot for Contact Form 7',			
			'slug' => 'contact-form-7-honeypot',
			'pluginfile' => 'honeypot.php',
			'ocdi' => 1,				
    ),		
);

$tx_faqs = array (
	array(
            'question' => __( 'Demo Import failed.', 'i-design' ),
            'answeer' => __( 'If demo data import fails with a simple error message like “Import failed” or “Object, Object” or.”500 Internal Server Error” or “404 Page Not Found”, 
				Please follow these steps:<br />
				1. Upgrade latest version of WordPress, PHP version 5.6 or higher.<br />
				2. Increase memory limits. Contact your server provider to help you increase following PHP limits:<br />
				max_execution_time 3000<br />
				memory_limit 256M<br />
				post_max_size 100M<br />
				upload_max_filesize 100M', 'i-design' ),
    ),
	array(
            'question' => __( 'Thumbnail or Slider images are not visible.', 'i-design' ),
            'answeer' => __( 'The most common reason is “Photon” services of plugin “Jetpack”, which stores your images on a remote server to save your space. Turn of the “Photon” services. This happens because the script we use to crop images on the fly do not support remote images for security reason.', 'i-design' ),
    ),
	array(
            'question' => __( 'Demo contact forms are not working.', 'i-design' ),
            'answeer' => __( 'If you are using one of our demo to start your website, make sure to change the email id of the forms, from menu "Contact" > "Contact Forms". By default the forms will send the submitted details to a demo email id.', 'i-design' ),
    ),
	array(
            'question' => __( 'What is “[honeypot honeypot…?', 'i-design' ),
            'answeer' => __( 'If you are using one of our demo content, you are likely to see this around the forms. We use a plugin “Contact Form 7 Honeypot” to stop spammers abusing the form. Either you can install the plugin or remove the string from the form by going to menu “contact” > “Contact Forms”.', 'i-design' ),
    ),
	array(
            'question' => __( 'I activated my new theme and it doesn’t look like the demo. What’s up with this?', 'i-design' ),
            'answeer' => __( 'By default the Wordpress comes with only one sample post and a page. Once you activate a theme, it requres little bit of setup, like logo, color, social links, etc. 
				<br />We have added inbuilt options to import the demo contents and setup in one click to help you achieve a starting point for your website.', 'i-design' ),
    ),

);