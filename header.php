<?php builder_add_doctype(); ?>

<?php builder_add_html_tag(); ?>

<head>

<?php builder_add_charset(); ?>

<?php builder_add_title(); ?>

<?php builder_add_favicon(); ?>

<?php builder_add_stylesheets(); ?>

<?php builder_add_scripts(); ?>

<?php builder_add_meta_data(); ?>

<?php wp_head(); //we need this for plugins ?>

<center><a href="http://ttd2.2020creative.net" id="logo"><img src="/wp-content/themes/Builder-Carter-Custom/images/tran-thomas-design-kc.png" alt="Tran Thomas Design" Kansas City></a></center>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>