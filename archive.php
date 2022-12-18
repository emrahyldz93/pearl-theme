<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

get_header();
?>
<div class="bodyContent">
	<div class="pageCointainer">
		<section class="comonSection aboutSection">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="sectionTitle"><?php the_archive_title(); ?></h2>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="blogItem text-left" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="biThumb">
							<?php the_post_thumbnail('blog', array('class' => ' img-fluid  ')); ?>
							<div class="biMeta">
								<?php the_category(', '); ?>, <?php the_time('d F Y'); ?>
							</div>
						</div>
						<div class="biDetails">
							<?php
							if (is_singular()) :
								the_title();
							else :
								the_title('<h3 class=""><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
							endif;

							if ('post' === get_post_type()) :
							?>

							<?php endif; ?>

							<p>
								<?php echo substr(get_the_excerpt(), 0, 87); ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="btt_link"><span><?php _e('Read More', 'pearl'); ?></span></a>
							<span class="blogCount"><?php echo $i; ?></span>
						</div>
					</div>
				</div>
				<?php
				get_footer();
