<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title><?php bloginfo('title'); ?><?php wp_title(); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/logo.png">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/swipebox.css">
<?php if(is_page()): ?>
<link href="<?php bloginfo('template_directory'); ?>/js/video-js.css" rel="stylesheet" type="text/css">
<script src="<?php bloginfo('template_directory'); ?>/js/video.js"></script>
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body<?php if(is_home()): ?> style="overflow: auto !important;"<?php endif; ?><?php if(!is_home() && !is_front_page()): echo' style="background: url('.wp_get_attachment_url( get_post_thumbnail_id($post->ID) ).') no-repeat;" class="mobo"'; endif; ?>>
	
	<?php if(!is_home() && !is_front_page() && !wp_is_mobile()): ?><div class="opbg"><?php endif; ?>

	<header class="top-header">

		<div class="wrap">

			<h1 class="top-header-title"><a href="<?php bloginfo('url'); ?>/">Radius Machining</a></h1>

			<nav class="top-header-langs">
				<ul><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul>
			</nav>

			<nav class="top-header-nav" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'container' => false)); ?>
			</nav>

		</div>

	</header>
