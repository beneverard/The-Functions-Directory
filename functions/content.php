<?php // functions/content.php

// modify excerpt length
add_filter('excerpt_length', function($length) {
	return 20;
}, 999);

// modify excepry 'more' text
add_filter('excerpt_more', function($more) {
	return '[.....]';
});