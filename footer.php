</div>
<footer class="site__footer">
	<div class="container">
	<nav>
		<?php wp_nav_menu(array(
			'theme_location' => 'footer',
			'depth' => 2,
		)); ?>
	</nav>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>