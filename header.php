<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pearl
 */

?>
<?php $options = get_option('pearl_settings');  ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php echo $options['general-googlecode'] ?>
</head>
<?php if($options['general-mode']): ?>
	<body <?php body_class('light'); ?>>
<?php else: ?>
	<body <?php body_class('dark'); ?>>
<?php endif; ?>
	<?php wp_body_open(); ?>
<?php if($options['general-switcher']): ?>
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-box">
				<div class="letter">L</div>
				<div class="letter">O</div>
				<div class="letter">A</div>
				<div class="letter">D</div>
				<div class="letter">I</div>
				<div class="letter">N</div>
				<div class="letter">G</div>
			</div>
		</div>
	</div>
<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 profileColumn">
				<div class="profileSidebar">
					<div class="psHeader">
						<svg preserveAspectRatio="none" viewBox="0 0 100 100">
							<polygon points="0 20, 100 20, 0 100" opacity=".65"></polygon>
						</svg>
						<svg class="svg2" preserveAspectRatio="none" viewBox="0 0 100 120">
							<polygon points="0 20, 100 20, 15 120" opacity=".8"></polygon>
						</svg>
						<div class="psContent">
							<h3><?php echo $options['sidebar-name']; ?></h3>
							<span><?php echo $options['sidebar-career']; ?></span>
						</div>
					</div>
					<div class="psPhoto">
						<?php if ($options['sidebar-image']) { ?>
							<img src="<?php echo  $options['sidebar-image']['url'] ?>" alt="none image" />
						<?php } else { ?>
							<img src="<?php echo  get_template_directory_uri(); ?>/assets/images/home_01/1.jpg" alt="none image" />
						<?php } ?>
						<div class="psSocial">
							<?php
							$layout = $options['sidebar-social-icon'];

							if ($layout) : foreach ($layout as $row) { ?>

									<a href="<?php echo $row['link'] ?>" target="_blank" class="<?php echo $row['color'] ?>"><i class="<?php echo $row['icon'] ?>"></i></a>
							<?php	}

							endif;
							?>
						</div>
					</div>
					<div class="psSkills">
						<?php
						$layout = $options['sidebar-skills'];

						if ($layout) : foreach ($layout as $row) { ?>

								<div class="pssBox" data-count="<?php echo $row['number'] ?>">
									<div class="pssbCount"><?php echo $row['number'] ?></div>
									<h5><?php echo $row['skill'] ?></h5>
									<div class="pssbBars">
										<div class="pssbBar <?php echo $row['color'] ?>" style="width: 0%;"></div>
									</div>
								</div> <?php	}

								endif;
						?>
					</div>
					<div class="psFooter color-white">
						<a href="<?php echo  $options['sidebar-cv']['url'] ?>" class="btt_btn only_icon btt_reverse"><span><i class="icon icon-DownloadCloud"></i></span></a>
						<a href="<?php echo  $options['sidebar-button-url'] ?>" class="btt_btn"><span><i class="icon icon-Bag"></i><?php echo  $options['sidebar-button'] ?></span></a>
					</div>
				</div>
			</div>
			<div class="col-lg-8 contentColumn">
				<header class="header clearfix">
					<a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i>Menu</a>
					<nav class="mainMenu">
						<ul class="clearfix">					
						</ul>
						<?php
						if ( has_nav_menu( 'main-menu' ) ) {
							wp_nav_menu( array(
								'theme_location'  => 'main-menu',
								'menu'            => '',
								'container'       => 'div',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'main-menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul>%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							)
							);
						}
							?>
							<?php wp_reset_query(); ?>
					</nav>
					<a href="#" class="sidebarToggler"><span><span></span><span></span><span></span></span></a>
				</header>
				<div class="sidebar">
				
					<a href="javascript:void(0);" class="widget_closer"><i class="icofont-close-line"></i></a>
					
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					
				
				</div>
				<div class="sidebarOverlay"></div>
				
					


