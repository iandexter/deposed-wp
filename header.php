<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_single() || is_page() || is_archive()) { bloginfo('name'); echo(' - '); wp_title('',true); } else { bloginfo('name'); echo(' - '); bloginfo('description'); } ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div class="container">
  <div class="header">
    <h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a> 
    <br /><span><?php bloginfo('description'); ?>&nbsp;<a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to my feed"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-feed.gif" alt="[feed]" width="16" height="16" /></a></span></h1>
  </div><!-- end header -->
