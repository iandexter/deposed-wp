<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<div class="post">
     <h2 style="font-weight:normal">Search Results for <strong><?php echo $s; ?></strong></h2>
  </div>
<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
		<p class="byline">In <?php the_category(', ') ?> on 
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> <?php the_tags('tagged ', ', ', ''); ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?></p>
		<?php the_excerpt() ?>
	</div><!-- end post -->
<?php endwhile; ?>
<?php else : ?>
	<div class="post">
    <h2 style="font-weight:normal">Sorry, no results for <strong><?php echo $s; ?></strong></h2>
    <p>Try another search or check out one of these fine recent posts.</p>
  </div>
<?php endif; ?>
<div class="postnoline">
	<span class="previous"><?php next_posts_link('&larr; Before') ?></span>
	<span class="next"><?php previous_posts_link('After &rarr;') ?></span>
</div>
<?php get_footer(); ?>
