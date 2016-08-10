<?php get_template_part('templates/page', 'header'); ?>
<nav>
<?php //display breadcrumbs except for front page
	if(!is_front_page()) {
		if ( function_exists('yoast_breadcrumb') ) {
		  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} 
	}
?>
</nav>
<?php get_template_part('templates/content', 'page'); ?>