<?php

update_option('siteurl','http://dev.fiatinsight.com'); update_option('home','http://dev.fiatinsight.com');

// Theme Initialization for Lebenswelt 


// GET CORE ///////////
	define('CORE', TEMPLATEPATH . "/core");
	define('CORENAME', "core");
	include(CORE . "/init_core.php");
	
	
// CUSTOM LOGIN LINK
function wpc_url_login(){
	return "http://fiatinsight.com/"; // your URL here
}
add_filter('login_headerurl', 'wpc_url_login');


// CUSTOM LOGIN LOGO
function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/css/universals.css' );
}
add_action('login_head', 'login_css');



?>
