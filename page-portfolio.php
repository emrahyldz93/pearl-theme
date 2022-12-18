<?php
/*
	Template Name: Portfolio Template
 */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

get_header();
?>
<?php $options = get_option('pearl_settings'); ?>
<?php while( have_posts() ): the_post(); ?>

	<?php get_template_part('archive', 'portfolio'); ?>

	
<?php endwhile; ?>					

				<?php
				//get_sidebar();
				get_footer();
