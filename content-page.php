<?php get_header(); ?>

<div class="content-container wrap">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
	
	<div class="clear"></div>
</div>
    
			<?php
			$argsThumb = array(
				'order'          => 'ASC',
				'post_type'      => 'attachment',
				'post_parent'    => $post->ID,
				'post_mime_type' => 'image',
				'post_status'    => null,
				'posts_per_page' => 8
			);
			$attachments = get_posts($argsThumb);
			if ($attachments) {?>
			
			<div class="dacontent">
<?php if(is_page('kontakt') OR is_page('contact') OR is_page('kontakti')): ?>
<?php else: ?>
 <div class="wrap">
				<h3>Galerii</h3><?php endif; ?>
	<div id="gallery" <?php if(is_page('kontakt') OR is_page('contact') OR is_page('kontakti')): ?>style="display:none;"<?php endif; ?> class="gallery"><div style="width:25000px;"><?php
				foreach ($attachments as $attachment) { ?>

				<a rel="gallery-1" class="swipebox" href="<?php echo wp_get_attachment_url($attachment->ID, 'thumbnail', false, false); ?>" style="background:url(<?php echo wp_get_attachment_image_src($attachment->ID, 'thumbnail')[0]; ?>) no-repeat; background-size: cover;">
				</a>
				<?php
				} ?><?php if(is_page('kontakt') OR is_page('contact') OR is_page('kontakti')): ?>
<?php else: ?>
					</div></div><?php endif; ?>
	
<?php 
			}
			?>
<div class="clear"></div>
			<?php
			$argsThumb = array(
				'order'          => 'ASC',
				'post_type'      => 'attachment',
				'post_parent'    => $post->ID,
				'post_mime_type' => 'video',
				'post_status'    => null,
				'posts_per_page' => 3
			);
			$attachments = get_posts($argsThumb);
			if ($attachments) { ?>
			<h3>Video</h3></div>
			
			<div style="display:block;text-align:center;height:250px;margin-top:20px;">
			<?php
				foreach ($attachments as $attachment) { ?>

				<div class="vid" style="display:block;width:33.3%;height:250px;margin-left: auto;margin-right: auto;">
				<video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" width="100%" height="250" data-setup="{}">
				<source src="<?php echo wp_get_attachment_url($attachment->ID, 'thumbnail', false, false); ?>" type='video/mp4' />
				</div>
				<?php
				}
?></div><?php
			}else{
				?>
			</div>
			
				<?php
			}
			?></div>
<div class="clear" style="margin:1px;"></div>
<?php get_footer();
