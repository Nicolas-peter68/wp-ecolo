<?php get_header(); ?>
<div class="container">
  <h1>Articles comming soon !</h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="jumbotron">
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); ?>
        <p class="post__meta">
          Publié le <?php the_time(get_option('date_format')); ?>
          par <?php the_author(); ?> • <?php comments_number(); ?>
        </p>
        <hr class="my-4">
        <p><?php the_excerpt(); ?></p>
        <a class="btn btn-success" href="<?php the_permalink(); ?>" role="button">Lire la suite</a>
      </div>

  <?php endwhile;
  endif; ?>
  <div class="site__navigation">
    <div>
      <?php the_posts_pagination(); ?>
    </div>
  </div>
  <?php get_footer(); ?>