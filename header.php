<?php do_action('lebenswelt_before_html');?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js">
  <head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<!-- Meta Images -->
	
		<?php if(lebenswelt('favicon')):?><link rel="shortcut icon" href="<?php echo lebenswelt('favicon');?>" type="image/x-icon" /><?php endif;?>
		<?php if(lebenswelt('touchicon')):?><link rel="apple-touch-icon" href="<?php echo lebenswelt('touchicon');?>" /><?php endif;?>

	<!-- Title -->
	
		<title><?php if(is_front_page()) { echo SITENAME; } else { wp_title(''); } ?></title>
	
	<!-- Wordpress Stuff -->
	
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_single() || is_page()) wp_enqueue_script( 'comment-reply' ); ?> <!-- This makes the comment box appear where the ‘reply to this comment’ link is -->
		<?php /* wp_enqueue_script("jquery"); */ ?>

	<!-- Stylesheets -->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />	
		<?php get_template_part ('library/dynamic_css'); ?>

	<!-- Responsive Design -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- IE Fixes -->	

		<?php get_template_part ('library/_ie_fixes'); ?>

	<!-- Font Replacement -->
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Mate:400,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Signika:400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
  	
		<?php if (lebenswelt('headerscripts')) echo lebenswelt('headerscripts');?>

		<?php wp_head(); ?>

	<!-- Call the Scripts -->

		<?php get_template_part ('scripts/scripts');?>
		

</head><!-- End Head -->

<body <?php body_class(); ?>>

	<div id="site" class="">
	
	
	<!-- ####### -- Navbar -- ####### -->
	<?php get_template_part ('navbar');?>
	
	<!-- ####### -- Off-Canvas Responsive Navbar -- ####### -->
	<?php get_template_part ('responsive-nav');?>

	<!-- ####### -- Banner -- ####### -->
	<?php get_template_part ('banner');?>

	<!-- ####### -- TitleBar -- ####### -->
	<?php get_template_part ('titlebar');?>

	<!-- ####### -- Navigation -- ####### -->
	<?php get_template_part ('navigation');?>

	<!-- ####### -- Main Slider -- ####### -->
	<?php get_template_part ('main-slider');?>


	<!-- MAIN CONTENT -->

