<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

?>

<div class="col-lg-4 folio_effect mix  <?php echo strip_tags(mb_strtolower(pearl_get_terms($post->ID, 'field'))); ?>1" >
	<div class="folio_item">
		<a href="<?php the_permalink(); ?>" class="folio_item_thumbs">
			<div class="folio_stack">
				<div class="folio_decoration"></div>
				<div class="folio_decoration"></div>
				<div class="folio_decoration"></div>
				<div class="folio_decoration"></div>
				<div class="folio_img_holder">
					<img class="folio_img" src="<?php echo get_the_post_thumbnail_url($post_id, 'large'); ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
		</a>
		<div class="folio_content">
			<h3 class="folio_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="folio_cat"><a href="<?php the_permalink(); ?>"><?php echo pearl_get_terms($post->ID, 'field'); ?></a></p>
		</div>
	</div>
</div>