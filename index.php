<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
						<h2 class="sectionTitle"><?php _e('Latest Posts', 'pearl'); ?></h2>
					</div>
				</div>
				<div class="row">
					<?php
	
					if (have_posts()) :

						if (is_home() && !is_front_page()) :
					?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
					<?php
						endif;
						
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
							get_template_part('template-parts/content', get_post_type());

						endwhile;


					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>
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
		//get_sidebar();
		get_footer();

		?>