<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post">
    <h3><?php the_title(); ?><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
    <p class="byline">Posted in <?php the_category(', ') ?> on <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> | <?php comments_number('Comments?', '1 comment', '% comments'); ?><br /><?php the_tags('Tags: ', ', ', ''); ?></p>
    <?php the_content(); ?>
    <br />
  </div><!-- end post -->
  <?php comments_template(); ?>
<?php endwhile; else: ?>
  <h2 class="page_header">Oops! Page not found.</h2>
  <div class="entry">
    <p>Sorry, no posts matched your criteria. Wanna search instead?</p>
    <?php include (TEMPLATEPATH . '/search.php'); ?>
  </div>
<?php endif; ?>
  <br />
  <div class="postnoline">
    <span class="previous"><?php previous_post_link('&laquo; %link') ?></span>
    <span class="next"><?php next_post_link('%link &raquo;') ?></span>
  </div>
<?php get_footer(); ?>
