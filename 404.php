<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pearl
 */

get_header();
?>

<div class="bodyContent">
	<div class="pageCointainer">

		<section id="primary" class="comonSection blogContentSection">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="sectionTitle">
					
							<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pearl' ); ?>
						
						</h2>
					</div>
			
				<?php if (have_posts()) : ?>



				<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
			</div>
		</section><!-- #main -->

		<?php
		get_footer();

