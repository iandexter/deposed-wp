<?php get_header(); ?>
  <div class="post">
    <h2>Oops! Page not found.</h2>
    <p>Sorry, the page you're looking for is not here. If you're looking for something in particular, try using the search form or browse the archives below.</p>
    <script type="text/javascript">
      var GOOG_FIXURL_LANG = 'en';
      var GOOG_FIXURL_SITE = "<?php bloginfo('url') ?>";
    </script>
    <script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
		<?php if(function_exists('randomimage')){ ?>
		<?php randomimage(); ?>
		<?php } ?>
  </div>
<?php get_footer(); ?>
