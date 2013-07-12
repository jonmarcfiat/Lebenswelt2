<?php

	//Runs at the beginning of every admin page before the page is rendered
		add_action( 'admin_init', 'load_scripts' );
		function load_scripts(){
			if(isset($_GET['page']) && ($_GET['page'] == 'lebenswelt' || $_GET['page'] == 'lebenswelt_feature')){
				wp_enqueue_script( 'jquery' );
				wp_enqueue_script( 'jquery-ui-core' );
				wp_enqueue_script( 'jquery-ui-tabs' );	
				wp_enqueue_script( 'jquery-ui-draggable' );	
				wp_enqueue_script( 'jquery-ui-sortable' );	
			}
		}
	


	//Runs in the HTML <head> section of the admin panel. 
	add_action( 'admin_head', 'load_head' );
	function load_head(){
		
			echo '<link rel="stylesheet" href="'.CORE_CSS.'/admin.css" type="text/css" media="screen" />';
			echo '<link rel="shortcut icon" href="'.CORE_IMAGES.'/favicon-lebenswelt.ico" type="image/x-icon" />';
		
		if(isset($_GET['page']) && ($_GET['page'] == 'lebenswelt' || $_GET['page'] == 'lebenswelt_feature')){
			if(lebenswelt_core_support(4)){
				echo '<script type="text/javascript" src="'.CORE_JS.'/ajaxupload.js"></script>';
				echo '<script type="text/javascript" src="'.CORE_JS.'/jquery.layout.js"></script>';
				include(CORE_ADMIN.'/lebenswelt_js_admin.php');
			}
		}

	}
	
	// Load Top Level 
	add_action( 'admin_menu', 'load_panels' );
	function load_panels(){	
		//add_menu_page('Page title', 'Top-level menu title', 'administrator', 'my-top-level-handle', 'my_magic_function');
		add_object_page ('Page Title', THEMENAME, 'manage_options','lebenswelt', 'lebenswelt_theme_options', CORE_IMAGES. '/favicon-lebenswelt.png');
	}
	
	// Theme Options
	add_action('admin_menu', 'add_option_interface');
	function add_option_interface() {
		//add_submenu_page(parent, page_title, menu_title, capability required, file/handle, [function]); 
		$lebenswelt_options_page = add_submenu_page('lebenswelt', 'Theme Options', 'Theme Options', 'manage_options', 'lebenswelt','lebenswelt_theme_options'); // Default
	}
	
	/*
		Deprecated with Core version 4.0 - Using custom post types instead
	*/
	
	/*
	if(VPRO && !lebenswelt_core_support(4)){
		// Feature Page
		add_action('admin_menu', 'add_feature_interface');
		function add_feature_interface() {
			//add_submenu_page(parent, page_title, menu_title, capability required, file/handle, [function]); 
			$lebenswelt_features_page = add_submenu_page('lebenswelt', 'Feature Page Setup', 'Feature Setup', 'manage_options', 'lebenswelt_feature','lebenswelt_feature_options');
		}
	}
	*/
	
	// Show Options Panel after activate  
	if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {

		//Do redirect
		header( 'Location: '.admin_url().'admin.php?page=lebenswelt&pageaction=activated' ) ;

	}

	
?>