<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pearl
 */

?>
<?php $options = get_option('pearl_settings'); ?>
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="copyRight"><?php echo $options['footer-content']; ?></div>
			</div>
		</div>
	</div>
</footer>
</div>
</div>
</div>
</div>
</div>
<!-- Bact To Top -->
<a href="javascript:void(0);" id="backtotop"><i class="icofont-bubble-up"></i></a>
<!-- Bact To Top -->
<?php wp_footer(); ?>

</body>

</html>