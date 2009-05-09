<?php get_header(); ?>
<?php if(function_exists('aktt_latest_tweet')){ ?>
<div class="twitter"><a href="http://twitter.com/iandexter" title="Follow me on Twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" width="32" height="32" /></a><?php aktt_latest_tweet(); ?></div>
<?php } ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="post">
    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
    <p class="byline">Posted in <?php the_category(', ') ?> on <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> | <?php comments_popup_link('Comments?', '1 comment', '% comments'); ?><br /><?php the_tags('Tags: ', ', ', ''); ?></p>
    <?php the_content('[Read more &raquo;]'); ?>
  </div><!-- end post -->
<?php endwhile; ?>
<?php else : ?>
  <div class="post">
    <h2>Oops! Page not found</h2>
    <p>Sorry, what you're looking for isn't here.</p>
    <form method="get" id="sform" action="<?php bloginfo('home'); ?>/">
      <p><input type="text" id="q" value="" name="s" size="15" style="width:80px;background-color:#e5e5e5" /><input type="submit" value="Search" style="font-size:10px;vertical-align:top" /></p>
    </form>
  </div><!-- end post -->
<?php endif; ?>
<div class="postnoline">
  <span class="previous"><?php next_posts_link('&laquo; Before') ?></span>
  <span class="next"><?php previous_posts_link('After &raquo;') ?></span>
</div>
<?php get_footer(); ?>
