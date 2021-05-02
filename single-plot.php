<?php 
  get_header(); 
?>
<div class="wrapper">
  <div id="content" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry">
              <?php the_content(); ?>
          </div>
      </div>
      <?php $x = get_the_ID(); ?>
      <?php endwhile; endif; ?>

  </div><!-- #content -->
  <div class="plot-sidebar">
    <?php

      $loop = new WP_Query( array(
          'post_type' => 'Plot',
          'post_status' => 'publish',
          'posts_per_page' => -1
        )
      );
      ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php if ($x == get_the_ID()) { ?>
        <h2><a style="color: aquamarine;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php } else {?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php } endwhile; wp_reset_query();?>
  </div>
</div>
<?php get_footer(); ?>
