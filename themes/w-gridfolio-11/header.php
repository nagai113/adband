<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('description'); ?> / <?php bloginfo('name'); ?> <?php wp_title('/ ',true,''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

</head>
<div id="centerContainer">
<body>
<div id="wrapper">

<div id="header">

<div id="cat-list">
<?php wp_nav_menu (array ( 'theme_location' => 'projects-nav') ); ?>

</div>

<div id="page-list">
<?php wp_nav_menu (array ( 'theme_location' => 'pages-nav') ); ?>
</div>

<div id="site-title">
<a href="<?php bloginfo('url'); ?>" target="_self"><?php bloginfo('name'); ?></a>
</div>

<div id="bkwtag">
<?php bloginfo('description'); ?>
</div>

<div id="searchbox" style="margin:0px 0px 15px -1px"><?php get_search_form(); ?></div><br />
<div id="footerbox">&copy; <?php the_date('Y'); ?> <?php bloginfo('name'); ?><br /><a href="http://www.w-portfolio.com">Built on W&mdash;Portfolio</a></div><!-- footer/copyright area -->

</div><!-- header div -->
<div id="main">