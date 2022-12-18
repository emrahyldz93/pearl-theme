<?php
/*
	Template Name: Blog Page
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
<div class="bodyContent">
	<div class="pageCointainer">
		<section class="comonSection blogSecion">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="sectionTitle"><?php _e('Latest Posts', 'pearl'); ?></h2>
					</div>
				</div>
				<div class="row">
					<?php $args = array(
						'post_type' => 'post'
					);
					$i = 1;
					query_posts($args);
					if (have_posts()) : while (have_posts()) : the_post(); ?>
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
						<?php $i++; endwhile;  ?>
					<?php else : ?>
						<?php get_template_part('template-parts/content', 'none'); ?>
					<?php endif; ?>
					<?php wp_reset_postdata();  ?>

				</div>
				<div class="row mt30 mb30">
					<div class="col-lg-12">
						<div class="btt_pagination">
							<span><?php the_posts_navigation(); ?></span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		get_footer();
