<?php get_header(); ?>

<div class="boxes wrap">
		
		<?php wp_nav_menu(array('theme_location' => 'secondary_navigation', 'container' => false)); ?>
		
	</div>
	
<section class="slider">

  <nav class="slider-nav">
    <a href="#" class="unslider-arrow prev">&laquo;</a>
    <a href="#" class="unslider-arrow next">&raquo;</a>
  </nav>
		
  <ul class="slidem">
    <?php
		$args = array('post_status' => 'publish', 'posts_per_page' => 99999999, 'post_type' => array('slider'));
		query_posts($args); if(have_posts()): while(have_posts()): the_post(); ?>
    <li style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>) no-repeat;">
      <h2><?php the_title(); ?></h2>
    </li>
    <?php endwhile; endif; wp_reset_query(); ?>
  </ul>
</section>

<?php get_footer();
