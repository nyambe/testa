<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
<style>
/*TIT BOX*/


/*BREAD CRUMB*/
.breadcrumbs a{
text-decoration:underline;
}
.breadcrumbs a.current-item{
text-decoration:none;
}
/*@media (min-width : 768px) {
	.nav_superior .logo {
	width: 200px;!important;
	margin-right:0px;!important;
	}
	.nav_superior .title_box {
min-width: 368px!important;
width: 75%!important;
	margin-right:0px!important;
}
.nav_superior .nav {
	width: 20px!important;
}
.teambuilding .nav_superior h1 {
font-size: 30px!important;
}
*/

/* HOME */
.portada ul.sub-menu {
padding-top: 19%;
}
.portada ul.sub-menu li, .portada ul.sub-menu a, .portada ul.sub-menu span, .portada ul.sub-menu li:nth-child(odd)
{
font-size: .9em; height:24px;
}
</style>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

