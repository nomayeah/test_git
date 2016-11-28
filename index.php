<?php get_header(); ?>

<main>
  <div id="posts">
    <ul class="blog">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
    ?>
      <li><a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
        <div class="blog-date"><?php echo get_the_date(); ?></div>
        <div class="blog-thumbnail">
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(array(100, 100)); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no_img.png">
          <?php endif; ?>

        </div>
        <div class="blog-txt"><?php the_excerpt(); ?></div></a>
        <?php the_category(', '); ?>
      </li>


    <?php
      endwhile;
    else:
    ?>

    <p>記事はないよ</p>

    <?php
      endif;
    ?>
    </ul>

  </div>
</main>

<?php get_footer(); ?>
