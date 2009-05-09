<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<h3><?php the_title(); ?><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
		<?php the_content('[Read more &rarr;]'); ?>
	</div><!-- end post -->
<?php endwhile; ?>
<?php else : ?>
	<div class="post">
		<h2>Oops! Page not found.</h2>
		<p>Sorry, the page you're looking for is not here. If you're looking for something in particular, try using the search form or browse the archives below.</p>
	</div><!-- end post -->
<?php endif; ?>
<?php get_footer(); ?>
