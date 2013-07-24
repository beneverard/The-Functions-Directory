<?php // hacks.php

// http://beneverard.co.uk/blog/wordpress-loading-jquery-correctly-version-2/
add_action('template_redirect', function() {

	// only use this method is we're not in wp-admin
	if ( ! is_admin() ) {

		// deregister the original version of jQuery
		wp_deregister_script('jquery');

		// register it again, this time with no file path
		wp_register_script('jquery', '', FALSE, '1.8.2');

		// add it back into the queue
		wp_enqueue_script('jquery');

	}

});