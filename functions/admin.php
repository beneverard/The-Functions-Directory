<?php // functions/admin.php

// add tinymcy horizontal rule button
add_filter("mce_buttons", function($buttons) {
	$buttons[] = 'hr';
	return $buttons;
});