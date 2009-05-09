<?php
/*
Template Name: Archives Index
*/
?>

<?php get_header(); ?>
	<div class="post">
		<h2>The Archives</h2>
    <div style="float:right;width:250px;">
      <h3>By Month</h3>
      <ul class="nav">
       	<?php wp_get_archives('type=monthly'); ?>
      </ul>
    </div>
    <h3>By Category</h3>
    <ul class="nav">
      <?php wp_list_cats(); ?>
    </ul>
  </div>
<?php get_footer(); ?>
