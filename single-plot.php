<?php 
  get_header(); 
?>
<section class="indv-plots-header">
    <div id="gs-center-header-box">
        <h1 id="gs-header-title">Garden Sites</h1>
        <button class="gs-apply-plot" href="https://google.com">Apply For A Plot</button>
    </div>
</section>
    <main class="flex indv-plots">
        <section>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div>
              <?php the_content(); ?>
          </div>
      <?php $x = get_the_ID(); ?>
      <?php endwhile; endif; ?>
        </section>
    <?php

      $loop = new WP_Query( array(
          'post_type' => 'Plot',
          'post_status' => 'publish',
          'posts_per_page' => -1
        )
      );
      ?>
      <nav class="indv-plots-nav">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php if ($x == get_the_ID()) { ?>
        <h2><a style="font-weight: bold; text-decoration:underline;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php } else {?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php } endwhile; wp_reset_query();?>
      </nav>
    </main>
<?php get_footer(); ?>
