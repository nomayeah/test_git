<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php wp_title('│', true, 'right'); bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css">

</head>
<body class="article">

<header>
<?php echo qtranxf_generateLanguageSelectCode('text'); ?>

<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logosample.png" alt=""><span>和風ペンション</span>ことりの樹</a></h1>

<div id="main-submit"><a href="#">予約する</a></div>

<nav>
  <?php wp_nav_menu( array(
    'theme_location'  =>'mainmenu',
    'container'       =>'',
    'menu_class'      =>'',
    'items_wrap'      =>'<ul id="main-nav">%3$s</ul>'));
  ?>
</nav>

<div id="menu-btn"><span></span></div>

</header>

<?php breadcrumb(); ?>

<?php wp_head(); ?>