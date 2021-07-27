<?php 
  get_header(); 
?>
<?php 
    require 'inc/section_vars.php';
    $header_args = array(
        "page_slug" => get_theme_mod($gs_sub_head_slug, "apply-for-plot"),
        "button_text" => get_theme_mod($gs_sub_head_text, "Apply For A Plot"),
        "img_src" => get_theme_mod($gs_sub_head_img, "/images/header-images/garden-sites-header-img.png"),
        "page_title" => get_theme_mod($gs_sub_head_title, "Garden Sites")
    );
    get_template_part('partials/content', 'page-sub-header', $header_args); 
?>
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
