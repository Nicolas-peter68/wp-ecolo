<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_header(); ?>
		<div class="wall vh-100 d-flex justify-content-center align-items-center" id="wall">
			<h1>Les bons gestes</h1>
		</div>

		<div class="container">
		<?php the_content(); ?>
			<div class="row">
				<div class="col-md-6">
					<h2>Sensibiliser les utilisateurs</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt provident accusantium nisi blanditiis. Dolor sunt, ipsum eius rerum vitae hic rem veritatis libero minus, unde, architecto quos in! Deserunt, mollitia! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam eaque minus dolores? Voluptas repudiandae, eum delectus magnam necessitatibus esse quia deserunt suscipit tempora praesentium impedit reprehenderit accusamus, totam temporibus?</p>
				</div>
				<div class="col-md-6">
					<h2>Adopter les bonnes pratiques</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt provident accusantium nisi blanditiis. Dolor sunt, ipsum eius rerum vitae hic rem veritatis libero minus, unde, architecto quos in! Deserunt, mollitia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eos consectetur eum nesciunt atque fugiat modi a facere saepe deleniti, eveniet dolores ea ab molestias voluptates alias accusamus enim non.</p>
				</div>
				<div class="col-md-6">
					<h2>Achat de matériel numérique</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt provident accusantium nisi blanditiis. Dolor sunt, ipsum eius rerum vitae hic rem veritatis libero minus, unde, architecto quos in! Deserunt, mollitia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eos consectetur eum nesciunt atque fugiat modi a facere saepe deleniti, eveniet dolores ea ab molestias voluptates alias accusamus enim non.</p>
				</div>
				<div class="col-md-6">
					<h2>Diminuer son emprunte numérique</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt provident accusantium nisi blanditiis. Dolor sunt, ipsum eius rerum vitae hic rem veritatis libero minus, unde, architecto quos in! Deserunt, mollitia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eos consectetur eum nesciunt atque fugiat modi a facere saepe deleniti, eveniet dolores ea ab molestias voluptates alias accusamus enim non.</p>
				</div>
		<?php endwhile;
endif; ?>
			</div>
			<?php get_footer(); ?>