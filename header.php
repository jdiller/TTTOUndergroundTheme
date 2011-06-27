<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen,projection" type="text/css">
    <?php wp_head(); ?>
   <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24184780-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>
  <body>
    <div id="wrap">
      <div id="header"></div>
      <div id="nav">
        <ul>
          <?php wp_list_pages('sort_column=menu_order&title_li=');?>
        </ul>
      </div>
      <div id="main">
        <div id="masthead">
          <img id="logo" src="<?php bloginfo('template_url')?>/images/ttto.png" alt="logo" title="" height="200" width="200">
          <img id="underground-img" src="<?php bloginfo('template_url')?>/images/header.png" alt="August 13, 2011, Toronto Underground Cinema" title="">
        </div>
      <div id="buytickets">
         <img src="<?php bloginfo('template_url')?>/images/buynow.png" alt="Buy Tickets" height="80">
         <table id="pricing">
            <tr><td><span style="font-weight:bold">Early Bird:&nbsp;</span></td><td><span>$99</span></td></tr>
            <tr><td><span style="font-weight:bold">Regular:&nbsp;</span></td><td><span>$150</span></td></tr>
         </table>
      </div>
      <div style="clear:both"></div>