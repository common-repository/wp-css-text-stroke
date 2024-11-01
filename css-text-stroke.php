<?php
/*
Plugin Name: CSS Text Stroke
Plugin URI: http://blog.mapmyglobe.com/css-text-stroke/
Description: Javascript-and-CSS-based stroking of any text element on your Wordpress template
Version: 1.0
Author: Julien C
Author URI: http://blog.mapmyglobe.com/
*/
?>
<?php
function wp_css_text_stroke_init() {
	$url = get_bloginfo('wpurl');
?>
	<!-- WP CSS Text Stroke Plugin version 0.1 -->
	<link rel="stylesheet" href="<?php echo $url; ?>/wp-content/plugins/wp-css-text-stroke/csstextstroke.css" type="text/css" media="screen" />
	<style>
	  div.description{ position:relative; }
	  h1{ position:relative; }
	  #headerimg{ padding:60px 0px 0px 175px; }
	</style>
  <!--[if lt IE 7]><style>#headerimg{ padding:0px; }</style><![endif]-->
	<script type="text/javascript" src="<?php echo $url; ?>/wp-content/plugins/wp-css-text-stroke/csstextstroke.js"></script>
	<script type="text/javascript">
  window.onload=function(){
    if(!NiftyCheck())
      return;
    processTextStroke("div#headerimg a");
    processTextStroke("div.description");
  }
  </script>
<?php 
}

add_action('wp_head', 'wp_css_text_stroke_init');

?>