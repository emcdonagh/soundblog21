<?php
/*
Plugin Name: Simple Google Analytics Plugin
Plugin URI:
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Erin McDonagh
Version: 1.0
 */
?>

<?php
function wpmudev_google_analytics() { ?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106834982-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106834982-1');
</script>

<?php }
add_action( 'wp_head', 'wpmudev_google_analytics', 10 );