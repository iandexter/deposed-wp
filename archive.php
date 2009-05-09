<?php get_header(); ?>
  <?php if (have_posts()) : ?>
  <?php //$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<div class="post">
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php single_cat_title(); ?></h2>
		<p><?php echo category_description(); ?></p>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('j F Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>
	</div><!-- end post -->
<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
		<p class="byline">Posted in <?php the_category(', ') ?> on <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> | <?php comments_popup_link('Comments?', '1 comment', '% comments'); ?><br /><?php the_tags('Tags: ', ', ', ''); ?></p>
		<?php the_excerpt() ?>
	</div><!-- end post -->
<?php endwhile; ?>
<?php else : ?>
	<div class="post">
    <h2 style="font-weight:normal">Sorry, no results for <strong><?php echo $s; ?></strong></h2>
    <p>Try another search or check out one of these fine recent posts.</p>
  </div>
	<?php query_posts('showposts=3'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  <div class="post">
		  <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
		  <p class="byline">In <?php the_category(', ') ?> on <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> <?php the_tags('tagged ', ', ', ''); ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?></p>
		  <?php the_excerpt() ?>
	  </div><!-- end post -->
	<?php endwhile; endif; ?>
<?php endif; ?>
<div class="postnoline">
	<span class="previous"><?php next_posts_link('&larr; Before') ?></span>
	<span class="next"><?php previous_posts_link('After &rarr;') ?></span>
</div>
<?php get_footer(); ?>
