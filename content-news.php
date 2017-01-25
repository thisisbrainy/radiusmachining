<?php

/*
Template Name: News
*/

get_header(); ?>


<div class="content-container bloog wrap">
	<?php if ( have_posts() ) : $odd = true; while ( have_posts() ) : the_post(); ?>
	
	<div class="box" style="float: left;width: 48%;">
	    <h2><?php the_title(); ?> / <?php the_time('m.d.Y'); ?></h2>
	<?php the_content(); ?>
	</div>
	<?php $odd = false; endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
	
	<div class="clear"></div>
</div>

<div style="padding:20px;"></div>

<?php get_footer(); 