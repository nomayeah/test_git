<?php
/*
Template Name: page-top
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php wp_title('│', true, 'right'); bloginfo('name'); ?></title>
<script src="base.js"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

</head>
<body>

<header>
<?php echo qtranxf_generateLanguageSelectCode('text'); ?>

<h1><a href="<?php echo home_url('/'); ?>"><span>和風ペンション</span>ことりの樹</a></h1>

<div id="main-submit"><a href="#">空室確認</a></div>

<?php
$page_id = 26;
$content = get_page($page_id);
echo $content->post_content;
?>

<nav>
  <?php wp_nav_menu( array(
    'theme_location'  =>'mainmenu',
    'container'       =>'',
    'menu_class'      =>'',
    'items_wrap'      =>'<ul id="main-nav">%3$s</ul>'));
  ?>
</nav>

</header>

<?php wp_head(); ?>

<main>
  <section id="section-01">
    <?php
      $page_id = 24;
      $page = get_post( $page_id );
      echo apply_filters('the_content', $page->post_content);
    ?>
  </section>

  <section id="section-02">
    <?php
      $page_id = 29;
      $page = get_post( $page_id );
      echo apply_filters('the_content', $page->post_content);
    ?>
  </section>

  <section id="section-03">
    <?php
      $page_id = 31;
      $page = get_post( $page_id );
      echo apply_filters('the_content', $page->post_content);
    ?>
  </section>

  <section id="section-04">
    <?php
      $page_id = 36;
      $page = get_post( $page_id );
      echo apply_filters('the_content', $page->post_content);
    ?>
  </section>
  <aside style="display: none;"><?php dynamic_sidebar(); ?></aside>
</main>

<?php get_footer(); ?>
