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
	<div class="wall vh-100 d-flex justify-content-center align-items-center" id="wall">
		<h1>Les bons gestes</h1>
	</div>
	<?php if ($ma_req->have_posts()) : while ($ma_req->have_posts()) : $ma_req->the_post(); $counter++ ?>
			<div class="container-md">
			<?php if ($counter%2 === 1) :?>
				<div class="row mx-auto">
					<img class="col-md-5 my-auto" src="<?= get_the_post_thumbnail_url() ?>" alt="">
					<div class="col-md-7 my-auto">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
				</div>
				<?php else: ?>
					<div class="row mx-auto">
					<div class="col-md-7 my-auto order-12 order-1">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
					<img class="col-md-5 my-auto order-md-12 order-2" src="<?= get_the_post_thumbnail_url() ?>" alt="">
				</div> <!--like a boss-->
			<?php endif; ?>
			</div>
	<?php endwhile;
	endif;
	wp_reset_postdata(); ?>
	<?php get_footer(); ?>