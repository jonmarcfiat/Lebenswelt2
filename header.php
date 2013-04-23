<?php do_action('pagelines_before_html');?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js">
  <head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<!-- Meta Images -->
	
		<?php if(pagelines('favicon')):?><link rel="shortcut icon" href="<?php echo pagelines('favicon');?>" type="image/x-icon" /><?php endif;?>
		<?php if(pagelines('touchicon')):?><link rel="apple-touch-icon" href="<?php echo pagelines('touchicon');?>" /><?php endif;?>

	<!-- Title -->
	
		<title><?php if(is_front_page()) { echo SITENAME; } else { wp_title(''); } ?></title>
	
	<!-- Wordpress Stuff -->
	
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_single() || is_page()) wp_enqueue_script( 'comment-reply' ); ?> <!-- This makes the comment box appear where the ‘reply to this comment’ link is -->
		<?php  wp_enqueue_script("jquery"); ?>

	<!-- Stylesheets -->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />	
		<?php get_template_part ('library/dynamic_css'); ?>

	<!-- Responsive Design -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- IE Fixes -->	

		<?php get_template_part ('library/_ie_fixes'); ?>

	<!-- Font Replacement -->

		<link href='http://fonts.googleapis.com/css?family=Mate:400,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Signika:400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
  	
		<?php if (pagelines('headerscripts')) echo pagelines('headerscripts');?>

		<?php wp_head(); ?>

	<!-- Call the Scripts -->

		<?php get_template_part ('scripts');?>

</head><!-- End Head -->

<!-- Facebook script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=304418233011542";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<body <?php body_class(); ?> data-spy="scroll">

	<!--
	<aside id="side-banner" class="span2 hidden-phone">
		<div class="floater" data-spy="affix" data-offset-top="40"><img src="/wp-content/uploads/bgs/ipad-narrow.jpg"></div>
	</aside>
	-->

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

