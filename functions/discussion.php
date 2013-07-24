<?php // functions/discussion.php

function get_gravatar_url($email = '') {

	if ( empty($email) ) {
		$email = get_the_author_meta('user_email');
	}

	$hash = md5( strtolower( trim ( $email ) ) );
	return 'http://gravatar.com/avatar/' . $hash;

}