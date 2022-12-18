<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pearl
 */

get_header();
$meta = get_post_meta( get_the_ID(), 'metabox_options', true );

?>

<div class="bodyContent">
	<div class="pageCointainer">
		<?php

		if (have_posts()) :

			while (have_posts()) : the_post(); ?>
				<section class="comonSection thumbSection">

					<ul id="folioGallery">
						<?php

						$gallery = $meta['portfolio-gallery'];
						$images = explode(',', $gallery);

						for ($i = '0'; $i < 3; $i++) { ?>
							<li data-thumb="<?php echo wp_get_attachment_url($images[$i]) ?>" data-src="<?php echo wp_get_attachment_url($images[$i]) ?>">
								<div class="folioThumb">
									<img src="<?php echo wp_get_attachment_url($images[$i]) ?>" alt="<?php the_title(); ?>" />
								</div>
							</li>
						<?php }	?>

					</ul>
				</section>
					
				<section class="comonSection folioContentSection">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<h3 class="folioTitle"><?php the_title(); ?></h3>
								<div class="row">
									<div class="col-lg-7">
										<div class="pageContent">
											<p class="mb14"><?php the_content(); ?></p>
										</div>
									</div>
									<div class="col-lg-5 folioMeta">
										<?php
										$layout = $meta['information-group'];

										if ($layout) : foreach ($layout as $row) { ?>

												<div class="icon_box_01">
													<i class="<?php echo $row['information-icon'] ?>"></i>
													<h3><?php echo $row['information-title'] ?></h3>
													<p><?php echo $row['information-content'] ?></p>
												</div>


										<?php    }
										endif; ?>

										<div class="fmfooter">
											<a href="<?php echo $row['portfolio-view-project'] ?>" class="btt_link"><i class="icon icon-WorldWide"></i><span>View Project</span></a>
											<div class="sicmr_social">
												<a href="http://www.facebook.com/share.php?u=<?php the_permalink('') ?>" target="_blank"><i class="icofont-facebook"></i></a>
												<a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank"><i class="icofont-twitter"></i></a>
												<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail_url('full'); ?>" target="_blank"><i class="icofont-pinterest"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt52">
							<div class="col-lg-12">
								<h2 class="sectionTitle"><?php echo $meta['challenges-big-title']; ?></h2>
							</div>
						</div>
						<div class="row">
							<?php
							$layout = $meta['challenges-group'];
							$i = 1 ; 				
							if ($layout) : foreach ($layout as $row) { ?>

									<div class="col-lg-4">
										<div class="icon_box_4">
											<i><?php echo $i; ?></i>
											<h3><?php echo $row['challenges-title']; ?></h3>
											<p>
											<?php echo $row['challenges-content']; ?>											</p>
										</div>
									</div>

							<?php   $i++; }
							endif; ?>



						</div>
						<div class="row mt52 mb30">
							<div class="col-lg-12">
								<h2 class="sectionTitle mb27"><?php echo $meta['cr-big-title']; ?></h2>
							</div>
							<div class="col-lg-12">
								<div class="clientReview">
									<p><?php echo $meta['cr-content']; ?></p>
									<cite>-- <?php echo $meta['cr-title']; ?></cite>
								</div>
							</div>
						</div>
					</div>
				</section>

		<?php endwhile;

		endif;

		?>


		<?php
		get_footer();
