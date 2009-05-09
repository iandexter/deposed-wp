<br clear="all" />
  <div class="footer">
    <div>
      <p><strong>About</strong></p>
      <p><!-- The text in the "About Yourself" box on your profile page will automatically appear here. -->
      <?php if (have_posts()) : the_post();
        the_author_description();
      endif;
      rewind_posts(); ?>
      <p><strong>Archives</strong></p>
      <select name=\"archive-dropdown\" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
      <option value=\"\"><?php echo attribute_escape(__('Select Month')); ?></option> 
      <?php wp_get_archives('type=monthly&format=option'); ?> </select>
    </div>
    <div>
      <p><strong>Recently</strong></p>
      <ul class="nav"><?php wp_get_archives('type=postbypost&limit=5'); ?></ul>
    </div>
    <div class="last">
      <p><strong>Meta</strong></p>
      <form method="get" id="sform" action="<?php bloginfo('home'); ?>/"><p>
        <input type="text" id="q" value="" name="s" size="55" style="width:120px;background-color:#e5e5e5" />
        <input type="submit" value="Search" style="font-size:10px;vertical-align:top" />
      </p></form>
      <p>Subscribe via <a href="<?php bloginfo('rss2_url'); ?>">RSS</a>.</p>
      <?php wp_register('<p>', '</p>'); ?> 
    </div>
  </div><!-- end footer -->
  <br clear="all" />
  <div class="copyright">
    <?php if (is_home()) : ?>
    <?php else : ?>
    <span class="previous">&laquo; <a href="<?php bloginfo('url') ?>">Back to Home</a></span>
    <?php endif; ?>
    <p>Under <a href="http://creativecommons.org/licenses/by-nc/3.0/">Creative Commons License (by-nc)</a>. Theme: <a href="http://iandexter.net">Deposed</a>.</p>
    <?php wp_footer(); ?>
  </div>
</div> <!-- end container -->
</body>
</html>
