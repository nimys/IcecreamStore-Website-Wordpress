<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/css/styles.css">


<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
  auto:true,
  pager:false,
});});
</script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/crawler.js" type="text/javascript" ></script>
<script type="text/javascript">
marqueeInit({
    uniqueid: 'mycrawler2',
    style: {
    },
    inc: 5, //speed - pixel increment for each iteration of this marquee's movement
    mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
    moveatleast: 2,
    neutral: 150,
    savedirection: true,
    random: true
});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
	

<div class="header_main wow bounceIn animated" data-wow-delay="0.4s">
<div class="container">
<div class="col-md-3 col-sm-3">
<div class="logo">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.jpg"></a>
</div>
</div>

<div class="col-md-9 col-sm-9">
<div id='cssmenu'>
<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
</div>
</div>
</div>
</div>




	<div id="main" class="site-main">
