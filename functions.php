<?php // functions.php


 //**************
// THEME SUPPORT

add_theme_support('post-thumbnails');
add_theme_support('menus');


 //****************
// THUMBNAIL SIZES

add_image_size('single-featured', 627, 350, TRUE);
add_image_size('single-thumbnail', 125, 83, TRUE);
add_image_size('single-hero', 587, 9999, FALSE);


 //*********
// INCLUDES

// bury gorups of functionality within the functions/ directory
// loader.php will include all .php files from within

require_once('functions/loader.php');