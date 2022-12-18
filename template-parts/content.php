<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

?>

<div class="bodyContent">
	<div class="pageCointainer">

		<section class="comonSection thumbSection" <?php the_ID(); ?>>
			<div class="blogThumb">
				<?php the_post_thumbnail('single-blog', array('class' => ' img-fluid  ')); ?>
			</div>
		</section>
		<section class="comonSection blogContentSection">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="blogTitle"><?php the_title(); ?></h3>
						<div class="blogMeta">
							<span> <?php the_author(' '); ?></span>
							<span><?php the_time('d F Y'); ?></span>
						</div>
						<div class="pageContent">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="row mt25">
					<div class="col-lg-8">
						<div class="sicmr_tag clearfix">
							<i class="icofont-tags"></i>
							<?php the_tags(' '); ?>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sicmr_social">
							<a href="http://www.facebook.com/share.php?u=<?php the_permalink('') ?>" target="_blank"><i class="icofont-facebook"></i></a>
							<a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank"><i class="icofont-twitter"></i></a>
							<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail_url('full'); ?>" target="_blank"><i class="icofont-pinterest"></i></a>
						</div>
					</div>
				</div>
				<?php
									$args = array(
										'link_before'       => '<span class="page-link">',
										'link_after'        => '</span>',
										'next_or_number'    => 'next',
										'separator'         => ' | ',
										'nextpagelink'      => __('Next &raquo', 'pearl'),
										'previouspagelink'  => __('&laquo Previous', 'pear'),
									);

									wp_link_pages($args); ?>
			</div>
		</section>