	<?php get_header(); ?>

	<?php
	$counter = 0;
	$args = array(
		'catagory_name' => 'ecologie',
		'orderby' => 'ID',
		'order' => 'ASC'
	);
	$ma_req = new WP_Query($args);
	?>
	<div class="wall my-auto" id="wall">
		<div class="vh-100 d-flex justify-content-center align-items-center my-auto">
			<h1 class="titre">Les bons gestes</h1>
		</div>
		<div class="w-100 d-flex justify-content-center align-items-center">
			<img src="<?= get_template_directory_uri() ?>/assets/img/arrow_down.svg" class="arrow move" alt="">
		</div>
	</div>
	</div>
	<div class="container-md">
	
	<?php if ($ma_req->have_posts()) : while ($ma_req->have_posts()) : $ma_req->the_post();
			$counter++ ?>
				<?php if ($counter % 2 === 1) : ?>
					<div class="row mx-auto mb-5">
						<img class="col-md-5 my-auto" src="<?= get_the_post_thumbnail_url() ?>" alt="">
						<div class="col-md-7 my-auto">
							<h2 id="<?=get_post_meta(get_the_ID(), 'post_id', true) ?>"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
					</div>
				<?php else : ?>
					<div class="row mx-auto mb-5">
						<div class="col-md-7 my-auto order-12 order-1">
							<h2 id="<?=get_post_meta(get_the_ID(), 'post_id', true) ?>"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
						<img class="col-md-5 my-auto order-md-12 order-2" src="<?= get_the_post_thumbnail_url() ?>" alt="">
					</div>
					<!--like a boss-->
				<?php endif; ?>
	<?php endwhile;
	endif;
	wp_reset_postdata(); ?>
	</div>
	<?php get_footer(); ?>