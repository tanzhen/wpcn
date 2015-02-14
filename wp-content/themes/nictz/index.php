<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php bloginfo('title')?></title>
</head>
<body>
	<div class="content">
		<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
			<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<?php endwhile;?>
	<?php endif;?>
	</div>
	<div class="cls"><?php wp_get_archives('type=postbypost&format=html&show_post_count=true'); ?></div>
</body>
</html>