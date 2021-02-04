<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<?php if (is_front_page()) : ?>
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand" href="<?= home_url('/'); ?>"><?php bloginfo() ?></a>
				<button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#introduction">Introduction</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#bons_gestes">Les bons gestes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#materiel">Matériel numérique</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#emprunte">Emprunte numérique</a>
						</li>
					</ul>
				</div>
			</nav>
		<?php else : ?>
			<a class="navbar-brand" href="<?= home_url('/'); ?>"><img src="<?= get_template_directory_uri()?>/assets/img/Logo.svg" alt="" srcset=""></a>
		<?php endif; ?>

		<?php
		/*wp_nav_menu(array(
				'theme_location'    => 'main',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'navbar-nav mr-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			));*/
		?>


	</header>