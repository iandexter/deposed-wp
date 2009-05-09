<?php get_header(); ?>
  <div class="post">
    <h2>Oops! Page not found.</h2>
    <p>Sorry, the page you're looking for is not here. If you're looking for something in particular, try using the search form or browse the archives below.</p>
    <script type="text/javascript">
      var GOOG_FIXURL_LANG = 'en';
      var GOOG_FIXURL_SITE = 'http://iandexter.net/';
    </script>
    <script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
    <div style="float:right;width:250px;">
      <h3>Archives by Month</h3>
      <ul class="nav">
      	<?php wp_get_archives('type=monthly'); ?>
      </ul>
    </div>
    <h3>Archives by Tag</h3>
    <ul class="nav">
      <?php wp_list_cats(); ?>
    </ul>
  </div>
<?php get_footer(); ?>
