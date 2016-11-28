<?php get_header(); ?>
<main>

  <div id="posts">
  <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
  ?>

    <div class="article-content">
      <h2><?php the_title(); ?></h2>
      <div class="article-date"><?php echo get_the_date(); ?><?php the_category(', '); ?></div>

      <div class="article-txt"><?php the_content(); ?></div></a>
    </div>


  <?php
    endwhile;
  else:
  ?>

  <p>記事はないよ</p>

  <?php
    endif;
  ?>

  </div>

  <aside style="display: none;"><?php dynamic_sidebar(); ?></aside>

</main>

<?php get_footer(); ?>
