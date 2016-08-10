<?php
/*
Template Name: Gallery Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<nav>
<?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
</nav>
<?php get_template_part('templates/content', 'page'); ?>