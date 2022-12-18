<?php


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
<div class="bodyContent">
	<div class="pageCointainer">
		<div class="bodyContent">
			<div class="pageCointainer">

				<section class="comonSection portfolioSection">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<h2 class="sectionTitle">Latest Projects</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<ul class="filterUL">
									<li class="active filter" data-filter="all">All</li>
									<?php
									$terms = get_terms('field', $args);
									foreach ($terms as $term) { ?>

										<li class="filter" data-filter="<?php echo $term->slug; ?>1"><?php echo $term->slug; ?></li>

									<?php	} ?>


								</ul>
							</div>
						</div>
						<div class="row" id="Grid">


							<?php

							$args = array('post_type' => 'portfolio');
							$loop = new WP_Query($args);

							if ($loop->have_posts()) :

								while ($loop->have_posts()) : $loop->the_post(); ?>

									<?php get_template_part('template-parts/content', 'archive'); ?>

							<?php endwhile;

							endif;

							?>

						</div>
						<div class="row loadMoreRow mb22">
							<div class="col-lg-12 loadMoreCol text-center mt23">
							<a href="javascript:void(0)" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>" class="btt_btn bttb_dark loadMoreItem home-load-more"><span><i class="icon icon-Restart"></i> Load More</span></a>
							</div>
						</div>
					</div>
				</section>
				<?php
				//get_sidebar();
				get_footer();
