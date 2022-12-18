<?php




/*




	Template Name: Home Page




 */









get_header();




?>




<?php $options = get_option('pearl_settings'); ?>














<div class="bodyContent">




	<div class="pageCointainer">




		<section class="comonSection aboutSection">




			<div class="container-fluid">




				<?php




				$layout = $options['home-sorter-setting1']['enabled'];









				if ($layout) : foreach ($layout as $key => $value) {









						switch ($key) {









							case 'about':




								include(TEMPLATEPATH . '/template-parts/home/about.php');




								break;




							case 'bio':




								include(TEMPLATEPATH . '/template-parts/home/bio.php');




								break;




							case 'what-i-do':




								include(TEMPLATEPATH . '/template-parts/home/what-i-do.php');




								break;




							case 'testimonials':




								include(TEMPLATEPATH . '/template-parts/home/testimonials.php');




								break;




							case 'price':




								include(TEMPLATEPATH . '/template-parts/home/price.php');




								break;




							case 'hobbies-languages':




								include(TEMPLATEPATH . '/template-parts/home/hobbies-languages.php');




								break;

	



							case 'client':




								include(TEMPLATEPATH . '/template-parts/home/client.php');




								break;




							case 'interesting-facts':




								include(TEMPLATEPATH . '/template-parts/home/interesting-facts.php');




								break;




							




						}




					}









				endif;




				?>	














			</div>




		</section>









		<?php




		//get_sidebar();




		get_footer();









		?>