<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_header(); ?>
<div class="wall vh-100 d-flex justify-content-center align-items-center" id="wall">
    <h1>Les bons gestes</h1>
</div>

<div class="container">
<div class="row">
    
		<?php
		$query = new WP_Query([
			'post_not_in' => [get_the_ID()],
			'post_type' => 'post',
			'posts_per_page' => 5,
		]);
		while ($query->have_posts()) : $query->the_post() ?>
			<div class="col-md-4">
				<div class="jumbotron text-white bg-dark">
					<h2 class="card-title"><?php the_title() ?></h2>
					<h4 class="card-subtitle mb-2">Auteur: <?php the_author(); ?></h4>
					Catégorie:
					<ul>
						<?php the_category(); ?>
					</ul>
					<p>Publié le <?php the_time(get_option('date_format')); ?></p>
					<hr class="my-4">
					<p><?php comments_number(); ?></p>
					<a class="btn btn-primary" href="<?php the_permalink(); ?>">Lire la suite</a>
				</div>
			</div>
		<?php endwhile;
		wp_reset_postdata() ?>
<?php endwhile;
endif; ?>
</div>
<?php get_footer(); ?>