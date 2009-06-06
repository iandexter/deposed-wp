<?php
/*
Template Name: Archives Index
*/
?>

<?php get_header(); ?>
	<div class="post">
		<h2>The Archives</h2>
		<h3>By Tags</h3>
		<?php wp_tag_cloud('smallest=10&largest=36&unit=px&number=0'); ?>
    <h3>By Month</h3>
    <ul class="nav">
     	<?php wp_get_archives('type=monthly'); ?>
    </ul>
    <h3>By Category</h3>
    <ul class="nav">
      <?php wp_list_cats(); ?>
    </ul>
  </div>
<?php get_footer(); ?>
